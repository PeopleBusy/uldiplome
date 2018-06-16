<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UserType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Nom de l\'utilisateur:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('prenom',TextType::class, array('label' => 'Prénom(s) de l\'utilisateur:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('username', TextType::class, array('label' => 'Identifiant:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('password',PasswordType::class, array('label' => 'Mot de passe:', 'required' => true, 'attr' => array('class' => 'form-control')));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
