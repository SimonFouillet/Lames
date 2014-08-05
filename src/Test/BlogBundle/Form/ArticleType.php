<?php

namespace Test\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 		'date')
			->add('titre',  	'text')
		    ->add('contenu',	'textarea')
		    ->add('auteur', 	'text')
		    //le champ publication n'est pas forcément coché
		    ->add('publication','checkbox', array('required' => false))
		    ->add('image', 		new ImageType())
		    //Permet de créer une catégorie
// 		    ->add(	'categories', 
// 	    			'collection', 
// 		    		array(
//     					'type' => new CategorieType(),
// 		    			'allow_add' => true,
// 		    			'allow_delete' => true
// 		    		))
			//Permet de choisir une catégorie
			->add(	'categories',
        			'entity',
					array(
						'class'		=> 'TestBlogBundle:Categorie',
						'property'	=> 'nom',
						'multiple' 	=> 	true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_blogbundle_article';
    }
}
