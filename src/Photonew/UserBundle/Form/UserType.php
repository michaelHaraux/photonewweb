<?php

namespace Photonew\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Photonew\MainBundle\Form\VilleType;
use Photonew\MainBundle\Form\CommandeType;
class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('userNom')
                ->add('userPrenom')
                ->add('userTel')
                ->add('userDateInsc')
                ->add('userAdNum')
                ->add('userAdRue')
                ->add('userAdComp')
                ->add('ville', new VilleType())
//                ->add('commandes', 'collection', array(
//                    'type' => new CommandeType(),
//                    'allow_add' => true,
//                    'allow_delete' => true,
//                ))
                ->add('save', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'photonew_userbundle_user';
    }

}
