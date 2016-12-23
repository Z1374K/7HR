<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkLoadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('hoursInMnth')->add('hoursWithFifty')->add('hoursWithHoundred')->add('total')->add('dateFrom')->add('dateTo')->add('company', EntityType::class,[
            "class"=>"AppBundle:Company","choice_label"=>"name"
        ])->add('position', EntityType::class,[
            "class"=>"AppBundle:Position","choice_label"=>"name"
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\WorkLoad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_workload';
    }


}
