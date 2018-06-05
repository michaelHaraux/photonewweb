<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                
                
                ->add('messageContenu', 'textarea')
                ->add('messageDate', 'date', array(
                    'format' => \IntlDateFormatter::SHORT,
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'data' => new \DateTime("now")
        ))
//            ->add('objet', new ObjetType,array('mapped' => false)) 
             ->add('objet', new ObjetType()) 
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'photonew_mainbundle_message';
    }

}
