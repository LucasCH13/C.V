<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'attr' => ['placeholder' => 'PRÉNOM'],
                'constraints'=> [
                    new NotBlank(),
                ]
            ])
            ->add('nom', TextType::class, [
                'attr' => ['placeholder' => 'NOM'],
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('email', TextType::class, [
                'attr' => ['placeholder' => 'E-MAIL'],
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('message', TextType::class, [
                'attr' => ['placeholder' => 'MESSAGE'],
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('save', SubmitType::class, [
                'attr' => ['id' => 'form_token']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
