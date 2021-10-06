<?php
class Article {
	private $designation, $reference, $prixUnitaire;

	public function __construct ($designation, $prixUnitaire, $reference) {
		$this->setDesignation($designation);
		$this->setReference($reference);
		$this->setPrix($prixUnitaire);
	}
	public function setPrix ($prix) {
		$this->prixUnitaire=$prix;
	}
	public function getPrix () {
		return $this->prixUnitaire;
	}
	public function setDesignation ($designation) {
		$this->designation=$designation;
	}
	public function getDesignation () {
		return $this->designation;
	}
	public function setReference ($reference) {
		$this->reference=$reference;
	}
	public function getReference () {
		return $this->reference;
	}
	public function afficher () {
		echo '<td>'.$this->getReference().'</td><td>'
		.$this->getDesignation().'</td><td>'.$this->getPrix().'</td>';
	}
}
?>