<?php

namespace MartenaSoft\Seo\Form;

use MartenaSoft\Seo\Entity\Seo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeoSmallFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("h1")
            ->add("title")
            ->add("title")
            ->add("description", TextareaType::class)
            ->add("keywords")
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Seo::class
            ]
        );
    }
}
