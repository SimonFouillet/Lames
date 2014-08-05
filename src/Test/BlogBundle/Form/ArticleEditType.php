<?php

namespace Test\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleEditType extends ArticleType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//on récupère le formulaire parent
    	parent::buildForm($builder, $options);
    	
    	//on supprime le champ date que l'on ne veut pas afficher
        $builder->remove('date');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_blogbundle_articleEdit';
    }
}
