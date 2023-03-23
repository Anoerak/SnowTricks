<?php

namespace App\Form;

use PhpParser\Parser\Multiple;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\All;

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
            ->add('main_picture', FileType::class, [
                'label' => 'Main Picture',
                'attr' => [
                    'value' => null,
                    'placeholder' => $options['data']->getMainPicture(),
                    'name' => 'main_picture',
                ],
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/jpg'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ])
                ],
            ])
            ->add('medias', FileType::class, [
                'label' => 'Medias Collection',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => [
                    'value' => null,
                    'name' => 'medias',
                ],
                'constraints' => [
                    new All([
                        new File([
                            'maxSize' => '10M',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/jpg',
                                'video/mp4',
                                'video/ogg',
                                'video/webm',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image',
                        ]),
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
