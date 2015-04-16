<?php

namespace GC\ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgrammesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('progDesc')
            ->add('progName')
            ->add('progDuree')
            ->add('progType')
            ->add('progFichier')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GC\ProjetBundle\Entity\Programmes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gc_projetbundle_programmes';
    }
}
