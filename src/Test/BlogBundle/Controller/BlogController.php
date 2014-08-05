<?php

namespace Test\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Image;

use Test\BlogBundle\Entity\Article;
use Test\BlogBundle\Entity\ArticleCompetence;
use Test\BlogBundle\Entity\Commentaire;
use Test\BlogBundle\Form\ArticleType;
use Test\BlogBundle\Form\ArticleEditType;

/**
 *
 * @author SFOUILLE
 *        
 */
class BlogController extends Controller{
	
	/**
	 * affiche la page d'accueil avec les articles listés
	 * @param unknown $page Index de la page doit être un entier naturel supérieur à 0.
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function indexAction($page, $nbArticles) {
		//on ne sait pas combien il y a de pages, mais au moins une
		if( $page < 1 ) {
			throw $this->createNotFoundException('Page n°' . $page . ' inexistante');
		}
		
		$em = $this->getDoctrine()->getManager(); 
		
		//récupération de tous les articles diponibles dans la catégorie demandée
		$listeArticles = $em->getRepository('TestBlogBundle:Article')
							//->findAll();
							->getArticles($nbArticles, $page);
		
		return $this->render('TestBlogBundle:Blog:index.html.twig', array(
				'listeArticles' => $listeArticles,
				'page' => $page,
				'nombrePage' => ceil(count($listeArticles)/$nbArticles)
				)
			);
		
		//return $this->render('TestBlogBundle:Blog:index.html.twig', array('listeArticles' => $listeArticles));
	}
	
	/**
	 * affiche un billet portant l'ID demandé
	 * @param unknown $id l'identifiant de l'article
	 */
	public function voirAction($id) {
		$em = $this	->getDoctrine()
							->getManager();
		
		//on récupère l'article
		//$article = $em->getRepository('TestBlogBundle:Article')->find($id);
		$article = $em->getRepository('TestBlogBundle:Article')->myFindOne($id);
		//$article = $em->getRepository('TestBlogBundle:Article')->myFindOne($id);
		
		//On retourne une exception si l'article n'existe pas
		if($article === null) {
			throw new \Exception('Article[id='.$id.'] inexistant!');
		}
		
		//on récupère la liste des articles/compétences portant l'id de l'article courant
		$listeArticleCompetences = $em	->getRepository('TestBlogBundle:ArticleCompetence')
										->findByArticle($article->getId());
		
		
		return $this->render('TestBlogBundle:Blog:voir.html.twig', array(
				'article' => $article, 
				'listeArticleCompetences' => $listeArticleCompetences));
	}
	
	/**
	 * Cette action va afficher le formulaire d'ajout ou ajouter un article en base de 
	 * données si l'on vient du formulaire
	 */
	public function ajouterAction() {	

		$article = new Article();
		
		$form = $this->createForm(new ArticleType, $article);
		
		//on récupère la requête
		$request = $this->get('request');		
		
		//Si on est en post on enregistre l'article, sinon on affiche le formulaire
		if($request->getMethod() == 'POST') {
			
			$form->submit($request);
			
			if ($form->isValid()) {
				
// 				$article->getImage()->upload();
			
				$em = $this->getDoctrine()->getManager();
				//$article a été créé plus haut et enrichi avec la méthode bind()
				$em->persist($article);
				$em->flush();
				
				return $this->redirect($this->generateUrl('testblog_voir', array(
						'id' => $article->getId())));
			}
		}		
		
		return $this->render('TestBlogBundle:Blog:ajouter.html.twig', array(
			'form' => $form->createView()
		));
	}
	
	/**
	 * Cette action modifie un article
	 * @param unknown $id
	 */
	public function modifierAction($id) {
		
		//récupération du repository
		$em = $this	->getDoctrine()
					->getManager();
		
		//récupératiRon de l'article
		$article = $em->getRepository('TestBlogBundle:Article')->find($id);
		
		//l'article n'existe pas
		if($article === null) {
			throw new \Exception('Article[id='.$id.'] inexistant!');
		}
		
		$form = $this->createForm(new ArticleEditType(), $article);
		
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST') {
			
			$form->submit($request);
			
			if($form->isValid()) {
				//Pas besoin de persister, Doctrine sait déjà qu'il peut effectuer les modifs
				$em->flush();
					
				return $this->redirect($this->generateUrl('testblog_voir', array(
						'id' => $article->getId())
				));
			}			
		}		
		
		return $this->render('TestBlogBundle:Blog:modifier.html.twig', array(
				'form' => $form->createView(), 
				'article' => $article
		));
	}
	
	/**
	 * Suppression de l'article
	 * @param unknown $id
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function supprimerAction($id) {
		//récupération de l'article
		$em = $this	->getDoctrine()
					->getManager();
		
		$article = $em->getRepository('TestBlogBundle:Article')
						->findOneBy(array('id' => $id));
		
		if($article === null)
		{
			new \Exception('Article[id='.$id.'] inexistant!');
		}
		
		//L'article va être supprimé, la confirmation a été donnée
		if($this->get('request')->getMethod() == 'POST') {
			$em->remove($article);
			
			$em->flush();
			
			$this->get('session')->getFlashBag()->add('info', 'Article supprimé');
			
		    return $this->redirect($this->generateUrl('testblog_accueil'));
		}
		//Confirmation de la suppression de l'article par un formulaire	
		return $this->render('TestBlogBundle:Blog:supprimer.html.twig', array('article' => $article));
	}
	
	/**
	 * Affiche directement les 3 derniers articles
	 */
	public function menuAction($nbMaxArticles) {
		
		$em = $this->getDoctrine()
					->getManager();
		
		$listeArticles = $em->getRepository('TestBlogBundle:Article')->findXLastArticles($nbMaxArticles);
		
		return $this->render('TestBlogBundle:Blog:menu.html.twig', array('liste_articles' => $listeArticles));
	}
	
	/**
	 * Cette fonction fourre-tout permet de faire des tests.
	 * @param unknown $text
	 */
	public function testAction($text) {
		$container = $this->container->get('test_blog.antispam');
		$limite = $this->container->getParameter('test_blog.antispamLimite');
		if($container->isSpam($text, $limite)){
			throw new \Exception('Votre message contient trop de liens et/ou adresses mail');
		}
		return $this->redirect($this->generateUrl('testblog_accueil'));
	}

}