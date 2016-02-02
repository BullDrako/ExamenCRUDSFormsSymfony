<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class AAAAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aaaa1', TextType::class, ['error_bubbling' => true])
            ->add('aaaa2', TextType::class, ['error_bubbling' => true])
            ->add('aaaa3', TextType::class, ['error_bubbling' => true])
            ->add('aaaa4', TextType::class, ['error_bubbling' => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'AppBundle\Entity\AAAA',
            ]
        );
    }

    public function getName()
    {
        return 'app_bundle_aaaatype';
    }
}
