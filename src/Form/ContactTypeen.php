<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactTypeen extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'E-mail', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Email()]
            ])
            ->add('nom', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Last name', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])
            ->add('prenom', textType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'First name', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])
            ->add('dateDeNaissance', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date of birth',
                'attr' => ['placeholder' => 'Date of birth', 'class' => 'form-control'],
            ])
            ->add('lieu_de_naissance', textType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Place of birth', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])
            ->add('adresse_domiciliaire', textType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Residential address', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])
            ->add('ville', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'City', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])   

            ->add('pays', textType::class,[
                'label' => ' ',
                'attr' => ['placeholder' => 'Country', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])

            ->add('profession', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Occupation', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 255])]
            ])

            ->add('revenu_mensuel', integerType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Monthly income', 'class' => 'form-control'],
                'constraints' => [new NotBlank(), new Length(['min' => 3, 'max' => 12])]
            ])

            ->add('devise', ChoiceType::class, [
                'choices' => [
                    'Currency' => '',
                    'Euro(€)' => 'Euro(€)',
                    'Dollar($)' => 'Dollar($)',
                    'Livre sterling(£)' => 'Livre sterling(£)',
                ],
                'label' => ' ',
                'attr' => ['class' => 'form-control'],
                'constraints' => [new NotBlank()]
            ])

            ->add('montant_emprunter', ChoiceType::class, [
                'choices' => [
                    'Your amount' => '',
                    '1000 €' => '1000 €',
                    '1500 €' => '1500 €',
                    '2000 €' => '2500 €',
                    '2500 €' => '2500 €',
                    '3000 €' => '3000 €',
                    '3500 €' => '3500 €',
                    '4000 €' => '4000 €',
                    '4500 €' => '4500 €',
                    '5000 €' => '5000 €',
                    '5500 €' => '5500 €',
                    '6000 €' => '6000 €',
                    '6500 €' => '6500 €',
                    '7000 €' => '7000 €',
                    '7500 €' => '7500 €',
                    '8000 €' => '8000 €',
                    '8500 €' => '8500 €',
                    '9000 €' => '9000 €',
                    '9500 €' => '9500 €',

                    '10 000 €' => '10 000 €',
                    '10 500 €' => '10 500 €',
                    '11 000 €' => '11 000 €',
                    '11 500 €' => '11 500 €',
                    '12 000 €' => '12 000 €',
                    '12 500 €' => '12 500 €',
                    '13 000 €' => '13 000 €',
                    '13 500 €' => '13 500 €',
                    '14 000 €' => '14 000 €',
                    '14 500 €' => '14 500 €',
                    '15 000 €' => '15 000 €',
                    '15 500 €' => '15 500 €',
                    '16 000 €' => '16 000 €',
                    '16 500 €' => '16 500 €',
                    '17 000 €' => '17 000 €',
                    '17 500 €' => '17 500 €',
                    '18 000 €' => '18 000 €',
                    '18 500 €' => '18 500 €',
                    '19 000 €' => '19 000 €',
                    '19 500 €' => '19 500 €',
                    '20 000 €' => '20 000 €',
                    '20 500 €' => '20 500 €',
                    '21 000 €' => '21 000 €',
                    '21 500 €' => '21 500 €',
                    '22 000 €' => '22 000 €',
                    '22 500 €' => '22 500 €',
                    '23 000 €' => '23 000 €',
                    '23 500 €' => '23 500 €',
                    '24 000 €' => '24 000 €',
                    '24 500 €' => '24 500 €',
                    '25 000 €' => '25 000 €',
                    '25 500 €' => '25 500 €',
                    '26 000 €' => '26 000 €',
                    '26 500 €' => '26 500 €',
                    '27 000 €' => '27 000 €',
                    '27 500 €' => '27 500 €',
                    '28 000 €' => '28 000 €',
                    '28 500 €' => '28 500 €',
                    '29 000 €' => '29 000 €',
                    '29 500 €' => '29 500 €',
                    '30 000 €' => '30 000 €',
                    '30 500 €' => '30 500 €',
                    '31 000 €' => '31 000 €',
                    '31 500 €' => '31 500 €',
                    '32 000 €' => '32 000 €',
                    '32 500 €' => '32 500 €',
                    '33 000 €' => '33 000 €',
                    '33 500 €' => '33 500 €',
                    '34 000 €' => '34 000 €',
                    '34 500 €' => '34 500 €',
                    '35 000 €' => '35 000 €',
                    '35 500 €' => '35 500 €',
                    '36 000 €' => '36 000 €',
                    '36 500 €' => '36 500 €',
                    '37 000 €' => '37 000 €',
                    '37 500 €' => '37 500 €',
                    '38 000 €' => '38 000 €',
                    '38 500 €' => '38 500 €',
                    '39 000 €' => '39 000 €',
                    '39 500 €' => '39 500 €',
                    '40 000 €' => '40 000 €',
                    '40 500 €' => '40 500 €',
                    '41 000 €' => '41 000 €',
                    '41 500 €' => '41 500 €',
                    '42 000 €' => '42 000 €',
                    '42 500 €' => '42 500 €',
                    '43 000 €' => '43 000 €',
                    '43 500 €' => '43 500 €',
                    '44 000 €' => '44 000 €',
                    '44 500 €' => '44 500 €',
                    '45 000 €' => '45 000 €',
                    '45 500 €' => '45 500 €',
                    '46 000 €' => '46 000 €',
                    '46 500 €' => '46 500 €',
                    '47 000 €' => '47 000 €',
                    '47 500 €' => '47 500 €',
                    '48 000 €' => '48 000 €',
                    '48 500 €' => '48 500 €',
                    '49 000 €' => '49 000 €',
                    '49 500 €' => '49 500 €',
                    '50 000 €' => '50 000 €',
                    '55 000 €' => '55 000 €',
                    '60 000 €' => '60 000 €',
                    '65 000 €' => '65 000 €',
                    '70 000 €' => '70 000 €',
                    '75 000 €' => '75 000 €',
                    '85 000 €' => '85 000 €',
                    '85 000 €' => '85 000 €',
                    '90 000 €' => '90 000 €',
                    '95 000 €' => '95 000 €',

                    '100 000 €' => '100 000 €',
                    '150 000 €' => '150 000 €',
                    '200 000 €' => '200 000 €',
                    '250 000 €' => '250 000 €',
                    '300 000 €' => '300 000 €',
                    '350 000 €' => '350 000 €',
                    '400 000 €' => '400 000 €',
                    '450 000 €' => '450 000 €',
                    '500 000 €' => '500 000 €',
                    '550 000 €' => '550 000 €',
                    '600 000 €' => '600 000 €',
                    '650 000 €' => '650 000 €',
                    '700 000 €' => '700 000 €',
                    '750 000 €' => '750 000 €',
                    '800 000 €' => '800 000 €',
                    '850 000 €' => '850 000 €',
                    '900 000 €' => '900 000 €',
                    '950 000 €' => '950 000 €',

                    '1000 000 €' => '1000 000 €',
                    '2000 000 €' => '2000 000 €',
                    '3000 000 €' => '3000 000 €',
                    '4000 000 €' => '4000 000 €',
                    '5000 000 €' => '5000 000 €',

                ],
                'label' => ' ',
                'attr' => ['class' => 'form-control'],
                'constraints' => [new NotBlank()]
            ])

            ->add('duree_remboursement', ChoiceType::class, [
                'choices' => [
                    'Duration of the loan' => '',
                    '6 mois' => '6 mois',
                    '1 an' => '1 an',
                    '2 ans' => '2 ans',
                    '3 ans' => '3 ans',
                    '4 ans' => '4 ans',
                    '5 ans' => '5 ans',
                    '6 ans' => '6 ans',
                    '7 ans' => '7 ans',
                    '8 ans' => '8 ans',
                    '9 ans' => '9 ans',
                    '10 ans' => '10 ans',
                    '11 ans' => '11 ans',
                    '12 ans' => '12 ans',
                    '13 ans' => '13 ans',
                    '14 ans' => '14 ans',
                    '15 ans' => '15 ans',
                    '16 ans' => '16 ans',
                    '17 ans' => '17 ans',
                    '18 ans' => '18 ans',
                    '19 ans' => '19 ans',
                    '20 ans' => '20 ans',
                    '21 ans' => '21 ans',
                    '22 ans' => '22 ans',
                    '23 ans' => '23 ans',
                    '24 ans' => '24 ans',
                    '25 ans' => '25 ans',
                    '26 ans' => '26 ans',
                    '27 ans' => '27 ans',
                    '28 ans' => '28 ans',
                    '29 ans' => '29 ans',
                    '30 ans' => '30 ans',
                    '31 ans' => '31 ans',
                    '32 ans' => '32 ans',
                    '33 ans' => '33 ans',
                    '34 ans' => '34 ans',
                    '35 ans' => '35 ans',
                    '36 ans' => '36 ans',
                    '37 ans' => '37 ans',
                    '38 ans' => '38 ans',
                    '39 ans' => '39 ans',
                    '40 ans' => '40 ans',
                    '41 ans' => '41 ans',
                    '42 ans' => '42 ans',
                    '43 ans' => '43 ans',
                    '44 ans' => '44 ans',
                    '45 ans' => '45 ans',
                    '46 ans' => '46 ans',
                    '47 ans' => '47 ans',
                    '48 ans' => '48 ans',
                    '49 ans' => '49 ans',
                    '50 ans' => '50 ans',


                ],

                'label' => ' ',
                'attr' => ['class' => 'form-control'],
                'constraints' => [new NotBlank()]
            ])

            ->add('contact_personnel', telType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Personal phone number', 'class' => 'form-control'],
                'constraints' => [new NotBlank()]
            ])

            ->add('contact_fixe', telType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Fixed telephone number', 'class' => 'form-control'],
                'constraints' => [new NotBlank()]
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Get my loan',
                'attr' => ['class' => 'btn btn-warning']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
