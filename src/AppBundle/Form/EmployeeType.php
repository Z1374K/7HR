<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

        $builder->add('forWho', ChoiceType::class, array('choices' => array ('internal'=>true, 'external'=>false,), 'choices_as_values'=>true,'choice_label' => function ($value, $key, $index){
            if ($value == true){
                return "Internal";
            }
            return strtoupper($key);
    }))->add('name')->add('surName')->add('pob')->add('dob',TextType::class)->add('citizenship')->add('passport')->add('status')->add('visaFrom')->add('visaTo')->add('permitFrom')->add('permitTo')->add('address')->add('city')->add('postCode')->add('motherName')->add('fatherName')->add('pesel')->add('identityCard')->add('accomodation');

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
