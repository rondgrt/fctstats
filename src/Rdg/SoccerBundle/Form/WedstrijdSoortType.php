<?php

namespace Rdg\SoccerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WedstrijdSoortType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wedstrijdsoort')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rdg\SoccerBundle\Entity\WedstrijdSoort'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rdg_soccerbundle_wedstrijdsoort';
    }
}
