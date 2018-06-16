<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class UserController extends Controller
{

    /**
     * @Route("/login",name="login")
     * @Route("/")
     */
    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        if($error != null) $error = "Nom d'utilisateur ou mot de passe incorrect!";
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AppBundle:Default:login/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

    }

    /**
     * @Route("/logout",name="logout")
     */
    public function logoutAction(Request $request)
    {


    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/user/add",name="user_add")
     */
    public function addAction(Request $request)
    {

        $form = $this->createForm(UserType::class, new User(), array(
            'action' => $this->generateUrl('user_add'),
            'method' => 'POST',
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $exist_user = $repository->checkIfUsernameAlreadyExists($user->getUsername());

            if($exist_user){

                $form = $this->createForm(UserType::class, $exist_user, array(
                    'action' => $this->generateUrl('user_add'),
                    'method' => 'POST',
                ));

                return $this->render('AppBundle:Default:user/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Identifiant ' . $user->getUsername() . ' déjà utilisé!',
                    'users' => $repository->findAll()));
            }

            $exist_user = $repository->checkIfNomPrenomAlreadyExists($user->getNom(), $user->getPrenom());

            if($exist_user){

                $form = $this->createForm(UserType::class, $exist_user, array(
                    'action' => $this->generateUrl('user_add'),
                    'method' => 'POST',
                ));

                return $this->render('AppBundle:Default:user/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Ces nom et prénom sont déjà utilisés!',
                    'users' => $repository->findAll()));
            }

            $role = $request->get('role');

            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setDateCreation(new \DateTime());
            $user->setAuteur($this->getUser()->getNom() . " " . $this->getUser()->getPrenom());
            $user->setIsActive(true);
            $user->setRoles(array($role));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);


            $em->flush();

            $form = $this->createForm(UserType::class, new User(), array(
                'action' => $this->generateUrl('user_add'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:user/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!',
                'users' => $repository->findAll()));


        }

        return $this->render('AppBundle:Default:user/new.html.twig', array('form' => $form->createView(), 'users' => $repository->findAll()));

    }

    /**
     * @Route("/user/edit/{id}",name="user_edit")
     */
    public function editAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'Aucun utilisateur trouvé avec l\id ' . $id
            );
        }

        $form = $this->createForm(UserType::class, $user, array(
            'action' => $this->generateUrl('user_edit', array('id' => $id)),
            'method' => 'POST',
        ));

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);


            $em->flush();

            $form = $this->createForm(UserType::class, $user, array(
                'action' => $this->generateUrl('user_add'),
                'method' => 'POST',
            ));

            return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!',
                'users' => $repository->findAll()));


        }

        return $this->render('AppBundle:Default:configuration/new.html.twig', array('form' => $form->createView(),  'users' => $repository->findAll()));

    }


}
