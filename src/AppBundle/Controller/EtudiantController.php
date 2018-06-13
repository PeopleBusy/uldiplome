<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Demande;
use AppBundle\Entity\Etudiant;
use AppBundle\Entity\Impression;
use AppBundle\Form\EtudiantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{

    /**
     * @Route("/demande/add",name="demande_add")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(EtudiantType::class, new Etudiant(), array(
            'action' => $this->generateUrl('demande_add'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $etudiant = $form->getData();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Etudiant');

            $repo_etudiant = $repository->checkIfEtudiantAlreadyExists($etudiant->getNom(), $etudiant->getPrenom(), $etudiant->getGenre(),
                $etudiant->getDateExamen(), $etudiant->getOptionEtud(), $etudiant->getSpecialite());

            //var_dump($repo_etudiant); die();

            if($repo_etudiant != null){ //DUPLICATA
                $dem_repository = $this->getDoctrine()->getRepository('AppBundle:Demande');

                return $this->render('AppBundle:Default:etudiant/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Une demande existe déja pour cet étudiant!',
                    'demandes_etudiant' => $dem_repository->findEtudiantDemandes($repo_etudiant[0]->getId())));
            }

            //ORIGINAL
            $demande = new Demande();
            $demande->setDateEnregistrement(new DateTime());
            $demande->setAnnee((new DateTime)->format("Y"));
            $demande->setEtatDemande("En cours"); //Traite, Annule
            $demande->setTypeDemande("Original"); //Duplicata
            $demande->setEnregistrePar($this->getUser()->getNom() . " " . $this->getUser()->getPrenom());
            $demande->setEtudiant($etudiant);


            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->persist($demande);


            $em->flush();

            $form = $this->createForm(EtudiantType::class, new Etudiant(), array(
                'action' => $this->generateUrl('demande_add'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:etudiant/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!',
                'demandes_etudiant' => null));


        }

        return $this->render('AppBundle:Default:etudiant/new.html.twig', array('form' => $form->createView(), 'demandes_etudiant' => null));

    }

    /**
     * @Route("/demande/list",name="demande_list")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Demande');

        $annee = (new DateTime)->format("Y");

        $demandes = $repository->findAll();

        return $this->render('AppBundle:Default:etudiant/list.html.twig', array('demandes' => $demandes,
            'libelle' => "Liste des demandes de l'année " . (new DateTime)->format("Y")));
    }


    /**
     * @Route("/demande/list_a_imprimer",name="demande_list_a_imprimer")
     */
    public function listAImprimerAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Demande');

        $annee = (new DateTime)->format("Y");

        $demandes = $repository->findDemandesByEtat("En cours");

        return $this->render('AppBundle:Default:etudiant/list_a_imprimer.html.twig', array('demandes' => $demandes, 'libelle' => "Liste des demandes à imprimer"));
    }

    /**
     * @Route("/demande/list_imprimer",name="demande_list_imprimer")
     */
    public function listImprimerAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Demande');

        $annee = (new DateTime)->format("Y");

        $demandes = $repository->findDemandesByEtat("Traitée");

        return $this->render('AppBundle:Default:etudiant/list_imprimer.html.twig', array('demandes' => $demandes, 'libelle' => "Liste des demandes traitées"));
    }

    /**
     * @Route("/demande/imprimer/{id}",name="demande_tout_imprimer")
     */
    public function toutImprimerAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Demande');

        if($id == 0){ //Afficher toutes les demandes a imprimer

            $demandes = $repository->findDemandesByEtat("En cours");

        }else{ //Afficher une demande a partir de son id

            $demandes = $repository->find($id);

            if (!$demandes) {
                throw $this->createNotFoundException(
                    'Aucune demande trouvée avec l\id ' . $id
                );
            }

        }


        return $this->render('AppBundle:Default:impression/tout_imprimer.html.twig', array('demandes' => $demandes, 'libelle' => "Aperçu avant impression"));
    }

    /**
     * @Route("/demande/duplicata/{id}",name="demande_duplicata")
     */
    public function addDuplicataAction(Request $request, $id)
    {
        $demande_repo = $this->getDoctrine()
            ->getRepository('AppBundle:Demande')
            ->find($id);

        if (!$demande_repo) {
            throw $this->createNotFoundException(
                'Aucune demande trouvée avec l\id ' . $id
            );
        }

        $demande = new Demande();
        $demande->setDateEnregistrement(new DateTime());
        $demande->setAnnee((new DateTime)->format("Y"));
        $demande->setEtatDemande("En cours"); //Traite, Annule
        $demande->setTypeDemande("Duplicata"); //Duplicata
        $demande->setEnregistrePar($this->getUser()->getNom() . " " . $this->getUser()->getPrenom());
        $demande->setEtudiant($demande_repo->getEtudiant());


        $em = $this->getDoctrine()->getManager();
        $em->persist($demande);


        $em->flush();

        return $this->redirect($this->generateUrl('demande_add'));

    }

    /**
     * @Route("/demande/imprimer_final",name="demande_imprimer_final")
     */
    public function imprimerAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {

            $demandes = $request->get('demandes');

            $repository = $this->getDoctrine()->getRepository('AppBundle:Demande');

            $em = $this->getDoctrine()->getManager();

            foreach ($demandes as $id){
                $demande = $repository->find($id);

                $demande->setEtatDemande("Traitée");

                $impression = new Impression();
                $impression->setDateImpression(new DateTime());
                $impression->setDemande($demande);
                $impression->setImprimePar($this->getUser()->getNom() . " " . $this->getUser()->getPrenom());


                $em->persist($demande);
                $em->persist($impression);

                $em->flush();
            }

            return new JsonResponse(array('status' => 'done'));
        }
        return new Response("Ceci n'est pas une requete AJAX!", 400);
    }


    /**
     * @Route("/inscription/autoriser/{id}",name="inscription_autoriser")
     */
    public function autoriserAction(Request $request, $id)
    {
        $inscription = $this->getDoctrine()
            ->getRepository('AppBundle:Inscription')
            ->find($id);

        if (!$inscription) {
            throw $this->createNotFoundException(
                'Aucune inscription trouvée avec l\id ' . $id
            );
        }

        $eleve = $inscription->getEleve();
        $eleve->setAutoriseInscription(1);

        $operation = new Operation();
        $operation->setInscription($inscription);
        $operation->setLibelle("Autoriser");
        $operation->setDateHeure(new DateTime());
        $operation->setAuteur($this->getUser()->getNom() .  " " . $this->getUser()->getPrenom());
        $operation->setTypeOperation(4); //1=enregistement, 2=modification, 0=suppression 3=Ajournement 4=Autoriser

        $em = $this->getDoctrine()->getManager();
        $em->persist($eleve);
        $em->persist($inscription);
        $em->persist($operation);


        $em->flush();

        return $this->redirect($this->generateUrl('inscription_list'));

    }

    /**
     * @Route("/inscription/delete/{id}",name="inscription_delete")
     */
    public function deleteAction(Request $request)
    {


    }


}
