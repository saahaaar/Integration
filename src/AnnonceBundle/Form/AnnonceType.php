<?php

namespace AnnoncesBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codePos')
            ->add('adresse')
            ->add('typeAn')
            ->add('titreAn')
            ->add('description')
            ->add('typeTarif')
            ->add('prix')
            ->add('photo')
            ->add('dateAn')
            ->add('categoriesAn', EntityType::class,array('class'=>'AnnoncesBundle:Categorieannonce','choice_label'=>'categorie','multiple'=>false));



    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnnoncesBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'annoncesbundle_annonce';
    }


}
