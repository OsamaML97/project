<?php

namespace EnfantsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OC\PlatformBundle\Form\AdvertType;

class EnfantsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', null, [
            'required'   => true,
            'attr'=>['placeholder'=>'enter kid last name'],
        ])
            ->add('prenom', null, [
                'required'   => true,
                'attr'=>['placeholder'=>'enter kid name'],


            ])
            ->add('sexe', null, ['attr'=>['placeholder'=>'enter the birth place'],])
            ->add('lieuNaissance',null ,['attr'=>['placeholder'=>'enter the birth place'],])
            ->add('dateNaissance')
            ->add('medicin',null ,['attr'=>['placeholder'=>'enter the child medicine'],])
            ->add('medecinNumero')
            ->add('Valider',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EnfantsBundle\Entity\Enfants'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'enfantsbundle_enfants';
    }


}
