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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * @Security("has_role('ROLE_USER')")
 */
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

            $repo_etudiant = $repository->checkIfEtudiantAlreadyExists($etudiant->getMention(), $etudiant->getNom(), 
                $etudiant->getPrenom(), $etudiant->getDateExamen(),
                $etudiant->getSpecialite(), $etudiant->getOptionEtud());

            //var_dump($repo_etudiant); die();

            if($repo_etudiant != null){ //DUPLICATA
                $dem_repository = $this->getDoctrine()->getRepository('AppBundle:Demande');

                return $this->render('AppBundle:Default:etudiant/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Une demande existe déja pour cet étudiant!',
                    'demandes_etudiant' => $dem_repository->findEtudiantDemandes($repo_etudiant[0]->getId())));
            }

            $etudiant->setGenre("M");

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
     * @Route("/demande/edit/{id}",name="demande_edit")
     */
    public function editAction(Request $request, $id)
    {

        $demande = $this->getDoctrine()->getRepository('AppBundle:Demande')->find($id);

        if (!$demande) {
            throw $this->createNotFoundException(
                'Aucune demande trouvée avec l\id ' . $id
            );
        }

        $form = $this->createForm(EtudiantType::class, $demande->getEtudiant(), array(
            'action' => $this->generateUrl('demande_edit', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $etudiant = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);


            $em->flush();

            $form = $this->createForm(EtudiantType::class, new Etudiant(), array(
                'action' => $this->generateUrl('demande_edit', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:etudiant/edit.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!',
                'etudiant' => new Etudiant()));


        }

        return $this->render('AppBundle:Default:etudiant/edit.html.twig', array('form' => $form->createView(), 'etudiant' => $demande->getEtudiant()));

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

        //return $this->render('AppBundle:Default:etudiant/list.html.twig', array('demandes' => $demandes,
          //  'libelle' => "Liste des demandes de l'année " . (new DateTime)->format("Y")));

        return $this->render('AppBundle:Default:etudiant/list.html.twig', array('demandes' => $demandes,
            'libelle' => "Liste des demandes"));
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
     * @Route("/demande/filter/{formId}",name="liste_demande_filter")
     */
    public function filterAction(Request $request, $formId)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Demande');

        $matricule = $request->get('matricule');

        if ($formId == "1") {
            $demandes = $repository->findDemandesByMatriculeEtat($matricule, null);
            if (!$demandes) {
                throw $this->createNotFoundException(
                    'Aucune demande trouvée avec le matricule: ' . $matricule
                );
            }

            return $this->render('AppBundle:Default:etudiant/list.html.twig', array('demandes' => $demandes, 'libelle' => "Liste des demandes"));
        }

        if ($formId == "2") {
            $demandes = $repository->findDemandesByMatriculeEtat($matricule, "En cours");
            if (!$demandes) {
                throw $this->createNotFoundException(
                    'Aucune demande trouvée avec le matricule: ' . $matricule
                );
            }

            return $this->render('AppBundle:Default:etudiant/list_a_imprimer.html.twig', array('demandes' => $demandes, 'libelle' => "Liste des demandes à imprimer"));
        }

        if ($formId == "3") {
            $demandes = $repository->findDemandesByMatriculeEtat($matricule, "Traitée");
            if (!$demandes) {
                throw $this->createNotFoundException(
                    'Aucune demande trouvée avec le matricule: ' . $matricule
                );
            }

            return $this->render('AppBundle:Default:etudiant/list_imprimer.html.twig', array('demandes' => $demandes, 'libelle' => "Liste des demandes traitées"));
        }

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

        $directeurAcademique = $this->getDoctrine()->getRepository('AppBundle:Configuration')->find(2);
        $directeurGenerale = $this->getDoctrine()->getRepository('AppBundle:Configuration')->find(3);

        return $this->render('AppBundle:Default:impression/tout_imprimer.html.twig', array('id' => $id, 'demandes' => $demandes, 'libelle' => "Aperçu avant impression",
            'directeurAcademique' => $directeurAcademique, 'directeurGenerale' => $directeurGenerale,
            'current_date' => (new DateTime)->format("d") . " " . $this->convertMonthToFrench((new DateTime)->format("F")) . " " . (new DateTime)->format("Y")));
    }

    /**
     * @Route("/impression/list",name="list_impression")
     */
    public function listImpressionAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Impression');

        //$annee = (new DateTime)->format("Y");

        $impressions = $repository->findAll();

        return $this->render('AppBundle:Default:impression/list_impression.html.twig', array('impressions' => $impressions, 'libelle' => "Liste des impressions"));
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


                //$em->persist($demande);
                //$em->persist($impression);

                //$em->flush();
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

    public function convertMonthToFrench($month) {
        $monthFr = "";
        switch ($month) {
            case "January":
                $monthFr = "Janvier";
                break;
            case "February":
                $monthFr = "Février";
                break;
            case "March":
                $monthFr = "Mars";
                break;
            case "April":
                $monthFr = "Avril";
                break;
            case "May":
                $monthFr = "Mai";
                break;
            case "June":
                $monthFr = "Juin";
                break;
            case "July":
                $monthFr = "Juillet";
                break;
            case "August":
                $monthFr = "Août";
                break;
            case "September":
                $monthFr = "Septembre";
                break;
            case "October":
                $monthFr = "Octobre";
                break;
            case "November":
                $monthFr = "Novembre";
                break;
            default:
                $monthFr = "Décembre";
                break;
        }

        return $monthFr;
    }


}
