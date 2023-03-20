<?php

namespace App\Form;

use App\Entity\Trick;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EditTrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'value' => null,
                    'placeholder' => $options['data']->getName(),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'value' => null,
                    'placeholder' => $options['data']->getDescription(),
                    'rows' => '10',
                    'cols' => '50',
                ],
            ])
            ->add('category', TextType::class, [
                'label' => 'Category',
                'attr' => [
                    'value' => null,
                    'placeholder' => $options['data']->getCategory(),
                ],
            ])
            ->add('main_picture', TextType::class, [
                'label' => 'Main Picture',
                'attr' => [
                    'value' => null,
                    'placeholder' => $options['data']->getMainPicture(),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
