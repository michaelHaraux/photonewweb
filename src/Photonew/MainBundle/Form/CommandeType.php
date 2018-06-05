<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('commandeDate')
                ->add('commandeRef')
                ->add('commandeType')
                ->add('commandeContenu')
                ->add('commandePrix')
                ->add('save', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Commande'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'photonew_mainbundle_commande';
    }

}
