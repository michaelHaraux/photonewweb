<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('clientNom')
                ->add('clientPrenom')
                ->add('clientMail')
                ->add('clientTel')
                ->add('clientDateInsc')
                ->add('clientAdNum')
                ->add('clientAdRue')
                ->add('clientAdComp')
                ->add('ville', new VilleType())
//                ->add('commandes', 'collection', array(
//                    'type' => new CommandeType(),
//                    'allow_add' => true,
//                    'allow_delete' => true
//                ))
                ->add('save', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'photonew_mainbundle_client';
    }

}
