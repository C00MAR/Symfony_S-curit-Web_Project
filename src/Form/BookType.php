<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Title', null, [
                'label' => 'Title',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Title of the Book'
                ]
            ])
            ->add('Price', NumberType::class, [
                'label' => 'Price',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Price of the Book'
                ],
                'html5' => true,
                'scale' => 2,
            ])
            ->add('Author', null, [
                'label' => 'Author',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Author of the Book'
                ]
            ])
            ->add('Pages', IntegerType::class, [
                'label' => 'Number of Pages',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Number of Pages'
                ]
            ])
            ->add('Img_link', null, [
                'label' => 'Image Link',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Link to the Image'
                ]
            ])
            ->add('Ajouter', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
