<?php

namespace Photonew\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObjetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//                ->add('objetNom', 'entity', array(
//                    'class' => 'PhotonewMainBundle:Objet',
//                    'property' => 'objetNom',
//                    'multiple' => false,
//                    'expanded' => false
//                ))
                ->add('objetNom', 'text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Photonew\MainBundle\Entity\Objet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'photonew_mainbundle_objet';
    }
}
