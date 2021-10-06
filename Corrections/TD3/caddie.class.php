<?php
   include 'article.class.php';
class Caddie {

	private $articles, $quantites;

	public function __construct () {
		$this->articles=array(); // ou []
		$this->quantites=array();
	}
	public function afficher () {
		foreach($this->articles as $key=>$article) {
			echo '<tr>';
			$article->afficher();
			echo '<td>'.$this->quantites[$key].'</td>';
			echo '<td>'.$article->getPrix()*$this->quantites[$key].'</td>';
			echo '</tr>';
		}		
	}
	public function afficherTotal () {
		$total=0;
		foreach($this->articles as $key=>$article)
			$total+=$article->getPrix()*$this->quantites[$key];
		echo 'Prix total TTC : '.$total.'<br />';
	}
	public function getNbArticles () {
		return count($this->articles);
	}
	public function ajouterArticle($article, $quantite) {
		$this->articles[$article->getReference()]=$article;
		if(empty($this->quantites[$article->getReference()]))
			$this->quantites[$article->getReference()]=$quantite;
		else
			$this->quantites[$article->getReference()]+=$quantite;
	}
}
?>