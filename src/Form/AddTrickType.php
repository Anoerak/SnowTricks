<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddTrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'value' => null,
                    'placeholder' => 'Name of the Trick',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'value' => null,
                    'placeholder' => 'Description of the Trick',
                    'rows' => '10',
                    'cols' => '50',
                ],
            ])
            ->add('category', TextType::class, [
                'label' => 'Category',
                'attr' => [
                    'value' => null,
                    'placeholder' => 'Category of the Trick',
                ],
            ])
            ->add('main_picture', TextType::class, [
                'label' => 'Main Picture',
                'attr' => [
                    'value' => null,
                    'placeholder' => 'Main Picture of the Trick',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}