<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Username',
                'attr' => [
                    'value' => $options['data']->getUsername(),
                    'name' => 'username',
                ],
                'required' => false,
            ])
            ->add('email', TextType::class, [
                'label' => 'Email',
                'attr' => [
                    'value' => $options['data']->getEmail(),
                    'name' => 'email',
                ],
                'required' => false,
            ])
            ->add(
                'password',
                PasswordType::class,
                [
                    'label' => 'Password',
                    'attr' => [
                        'value' => $options['data']->getPassword(),
                        'name' => 'password',
                    ],
                    'required' => false,
                ]
            )
            ->add(
                'confirm_password',
                PasswordType::class,
                [
                    'label' => 'Confirm password',
                    'attr' => [
                        'value' => $options['data']->getPassword(),
                        'name' => 'confirm_password',
                    ],
                    'required' => false,
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
