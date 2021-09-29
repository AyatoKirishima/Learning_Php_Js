<?php
    class Article
    {
        private $designation, $ref, $prixUnitaire;

        function __construct($ref, $designation, $prixUnitaire)
        {
            $this->ref = $ref;
            $this->designation = $designation;
            $this->prixUnitaire = $prixUnitaire;
        }

        function setPrix($prix)
        {
            $this->prixUnitaire = $prix;
        }

        function getPrix()
        {
            return $this->prixUnitaire;
        }

        function setDesignation($designation)
        {
            $this->designation = $designation;
        }

        function getDesignation()
        {
            return $this->designation;
        }

        function setRef($ref)
        {
            $this->ref = $ref;
        }

        function getRef()
        {
            return $this->ref;
        }

        function afficher()
        {
            echo("<tr>");  
                echo("<td>".$this->getRef()."</td>");
                echo("<td>".$this->getDesignation()."</td>");
                echo("<td>".$this->getPrix()."</td>");
            echo("</tr>");
        }
    }
    
?>