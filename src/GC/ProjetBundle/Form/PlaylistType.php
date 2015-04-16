<?php

namespace GC\ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaylistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('playNom')
            ->add('playDesc')
            ->add('playDiff')
            ->add('programmes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GC\ProjetBundle\Entity\Playlist'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gc_projetbundle_playlist';
    }
}