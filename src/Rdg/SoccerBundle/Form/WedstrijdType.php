<?php

namespace Rdg\SoccerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WedstrijdType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wedstrijdsoortId')
            ->add('seizoenId')
            ->add('scheidsrechterId')
            ->add('uitThuisId')
            ->add('clubsId')
            ->add('competitieronde')
            ->add('ruststand')
            ->add('eindstand')
            ->add('bijzonderheden')
            ->add('toeschouwers')
            ->add('speeldag')
            ->add('speelmaand')
            ->add('speeljaar')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rdg\SoccerBundle\Entity\Wedstrijd'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rdg_soccerbundle_wedstrijd';
    }
}
