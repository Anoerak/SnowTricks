<?php

namespace App\Form;

use App\Entity\Trick;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\All;

class EditTrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'mapped' => false,
                'attr' => [
                    'value' => $options['data']->getName(),
                    'name' => 'name',
                ],
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'value' => $options['data']->getDescription(),
                    'rows' => '10',
                    'cols' => '50',
                    'name' => 'description',
                ],
                'required' => false,
            ])
            ->add('category', TextType::class, [
                'label' => 'Category',
                'mapped' => false,
                'attr' => [
                    'value' => $options['data']->getCategory(),
                    'name' => 'category',
                ],
                'required' => false,
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
                'data_class' => null,
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
            ])
            ->add('embed_video_links', TextType::class, [
                'label' => 'Video Links',
                'mapped' => false,
                'attr' => [
                    'value' => null,
                    'name' => 'video_link',
                    'placeholder' => 'https://www.youtube.com/watch?v=xxxxxxxxxxx'
                ],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
