<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Configuration;
use AppBundle\Form\ConfigurationType;
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
 * @Security("has_role('ROLE_ADMIN')")
 */
class ConfigurationController extends Controller
{

    /**
     * @Route("/configuration",name="configuration")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(ConfigurationType::class, new Configuration(), array(
            'action' => $this->generateUrl('configuration'),
            'method' => 'POST',
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:Configuration');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $configuration = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($configuration);


            $em->flush();

            $form = $this->createForm(ConfigurationType::class, new Configuration(), array(
                'action' => $this->generateUrl('configuration'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!',
                'reglages' => $repository->findAll()));


        }

        return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(), 'reglages' => $repository->findAll()));

    }

    /**
     * @Route("/configuration/edit/{id}",name="configuration_edit")
     */
    public function editAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Configuration');

        $configuration = $repository->find($id);

        if (!$configuration) {
            throw $this->createNotFoundException(
                'Aucune configuration trouvée avec l\id ' . $id
            );
        }

        $form = $this->createForm(ConfigurationType::class, $configuration, array(
            'action' => $this->generateUrl('configuration_edit', array('id' => $id)),
            'method' => 'POST',
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:Configuration');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $configuration = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($configuration);


            $em->flush();

            $form = $this->createForm(ConfigurationType::class, new Configuration(), array(
                'action' => $this->generateUrl('configuration'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!',
                'reglages' => $repository->findAll()));


        }

        return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(), 'reglages' => $repository->findAll()));

    }


}
