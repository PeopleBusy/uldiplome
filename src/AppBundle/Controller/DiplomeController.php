<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Diplome;
use AppBundle\Entity\User;
use AppBundle\Form\DiplomeType;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class DiplomeController extends Controller
{

    /**
     * @Route("/diplome/add",name="diplome_add")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(DiplomeType::class, new Diplome(), array(
            'action' => $this->generateUrl('diplome_add'),
            'method' => 'POST',
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:Diplome');

        $nbDiplomes = $repository->countDiplomes();

        $impressionRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Impression');

        $nbImpressions = $impressionRepository->countImpressions();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $diplome = $form->getData();

            $diplome->setDateAjout(new \DateTime());
            $diplome->setAuteur($this->getUser()->getNom() . " " . $this->getUser()->getPrenom());

            $em = $this->getDoctrine()->getManager();
            $em->persist($diplome);


            $em->flush();

            $form = $this->createForm(DiplomeType::class, new Diplome(), array(
                'action' => $this->generateUrl('diplome_add'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:diplome/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!',
                'diplomes' => $repository->findAll(), 'nbDiplomes' => $nbDiplomes, 'nbImpressions' => $nbImpressions));


        }

        return $this->render('AppBundle:Default:diplome/new.html.twig', array('form' => $form->createView(), 'diplomes' => $repository->findAll(),
             'nbDiplomes' => $nbDiplomes, 'nbImpressions' => $nbImpressions ));

    }

}
