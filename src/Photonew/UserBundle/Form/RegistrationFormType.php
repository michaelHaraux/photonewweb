<?php

namespace Photonew\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Photonew\MainBundle\Form\VilleType;
use Photonew\MainBundle\Form\CommandeType;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add('userNom', 'text', array('label' => 'Nom :'))
                ->add('userPrenom', 'text', array('label' => 'Prénom :'))
                ->add('userTel', 'text', array('label' => 'Téléphone :'))
                ->add('userDateInsc', 'date', array('label' => "Date d'inscription :"))
                ->add('userAdNum', 'text', array('label' => 'Numéro :'))
                ->add('userAdRue', 'text', array('label' => 'Rue :'))
                ->add('userAdComp', 'text', array('label' => "Complément d'adresse :"))
                ->add('ville', new VilleType())
//                ->add('commandes', 'collection', array(
//                    'type' => new CommandeType(),
//                    'allow_add' => true,
//                    'allow_delete' => true
//                ))
        ;
    }

    public function getName() {
        return 'projet_client_registration';
    }

}
