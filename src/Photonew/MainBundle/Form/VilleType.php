<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VilleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('villeCodepostal', 'text', array('label' => 'Code Postal :'))
                ->add('villeNom', 'text', array('label' => 'Ville :'))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Ville'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'photonew_mainbundle_ville';
    }

}
