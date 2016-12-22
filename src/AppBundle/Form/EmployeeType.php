<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add('nazwisko')
                ->add('imie')
                ->add('dataUr')
                ->add('miejsceUr')
                ->add('miejsceZam')
                ->add('ulica')
                ->add('obywatelstwo', ChoiceType::class, array(
                    'choices'  => array(
                        'pol' => 'Polskie',
                        'ukr' => 'Ukraińskie',),))
                ->add('nrPaszportu')->add('status')        ;




    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Employee'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_employee';
    }


}
