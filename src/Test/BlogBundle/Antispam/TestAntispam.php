<?php

namespace Test\BlogBundle\Antispam;

class TestAntispam {
	
	protected $mailer;
	protected $locale;
	protected $nbForSpam;
	
	public function __construct(\Swift_Mailer $mailer, $locale, $nbForSpam) {
		$this->mailer = $mailer;
		$this->locale = $locale;
		$this->nbForSpam = $nbForSpam;
	}
	
	/**
	 * un texte est un spam lorsqu'il contient plus de trois lien et/ou mail
	 */
	public function isSpam($text) {
		//$limite = $this->container->getParameter('test_blog.antispamLimite');
		return $this->countLinks($text) + $this->countMails($text) > $this->nbForSpam;
	}
	
	/**
	 * compte tous les liens dans un texte
	 * @param unknown $text
	 */
	private function countLinks($text) {
		$matches = array();
		preg_match_all(
		'#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',
		$text,
		$matches);
		
		return count($matches[0]);		
	}
	
	/**
	 * compte tous les mails dans un texte
	 * @param unknown $text
	 */
	private function countMails($text) {
		$matches = array();
		preg_match_all(
		'#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i',
		$text,
		$matches);
		
		return count($matches[0]);
	}
}