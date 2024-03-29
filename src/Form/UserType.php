<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Neved',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Minimum 3 karakter...',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail címed',
                'required' => false,
                'attr' => [
                    'placeholder' => 'cím@domain...',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Üzenet szövege',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Írj ide...',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
