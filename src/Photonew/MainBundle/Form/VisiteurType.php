<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VisiteurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('visiteurNom','text')
            ->add('visiteurPrenom','text')
            ->add('visiteurMail','email')
            ->add('visiteurTel', 'integer')
            ->add('message', new MessageType())    
            ->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Visiteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'photonew_mainbundle_visiteur';
    }
}
