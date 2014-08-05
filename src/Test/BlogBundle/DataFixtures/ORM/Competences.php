<?php

namespace Test\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Test\BlogBundle\Entity\Competence;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * ajoute dans la base des données de test
 * @author SFOUILLE
 *
 */
class Competences implements FixtureInterface {
	public function load(ObjectManager $manager) {
		//Liste de noms de compétences à ajouter
		$listeNoms = array('Doctrine', 'Formulaire', 'Natation');
				
		foreach ($listeNoms as $nom) {
			$competence = new Competence();
			$competence->setNom($nom);
			$manager->persist($competence);
		}
		$manager->flush();
	}
}