<?php

namespace Rdg\SoccerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpelerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('achternaam')
            ->add('voorvoegsel')
            ->add('voornaam')
            ->add('geboorteplaats')
            ->add('gewicht')
            ->add('fctwenteSinds')
            ->add('vorigeClubs')
            ->add('positie')
            ->add('clubNaTwente')
            ->add('clubsId')
            ->add('landId')
            ->add('geboortedag')
            ->add('geboortemaand')
            ->add('geboortejaar')
            ->add('lengte')
            ->add('rugnr')
            ->add('info')
            ->add('foto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rdg\SoccerBundle\Entity\Speler'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rdg_soccerbundle_speler';
    }
}
