<?php

namespace Test\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @author SFOUILLE
 *
 */
class ArticleCompetence {
	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\Article")
	 * @var unknown
	 */
	private $article;
	
	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\Competence")
	 * @var unknown
	 */
	private $competence;
	
	/**
	 * @ORM\Column()
	 * @var unknown
	 */
	private $niveau;

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \Test\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
     */
    public function setArticle(\Test\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Test\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set competence
     *
     * @param \Test\BlogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\Test\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \Test\BlogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}
