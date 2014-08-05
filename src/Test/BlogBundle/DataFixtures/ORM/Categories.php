<?php

namespace Test\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Test\BlogBundle\Entity\Categorie;

/**
 *
 * @author SFOUILLE
 *        
 */
class Categories implements FixtureInterface {
	
	/**
	 * Ajoute des données dans la table catégorie
	 */
	public function load(ObjectManager $manager) {
		// Liste des noms de catégorie à ajouter
		$noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Évènement');
		
		foreach($noms as $i => $nom) {
			//On crée la catégorie
			$listeCategories[$i] = new Categorie();
			$listeCategories[$i]->setNom($nom);
			
			$manager->persist($listeCategories[$i]);
		}
		
		$manager->flush();
	}
}