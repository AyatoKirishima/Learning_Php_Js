<?php 
    class Article {
        private $designation, $ref, $prixUnit; //Référence,prix Unitaire
    
        function __constructor($designation, $ref, $prixUnit){
            $this->designation = $designation;
            $this->ref = $ref;
            $this->prixUnit = $prixUnit;
        }

        // Prix

        function SetPrix($prixUnit) {
            $this->prixUnit = $prixUnit;
        }

        function GetPrix() {
            return $this->prixUnit;
        }

        // Désignation

        function SetDesignation($designation) {
            $this->designation = $designation;
        }

        function GetDesignation() {
            return $this->designation;
        }

        // Référence

        function SetReference($ref) {
            $this->ref = $ref;
        }

        function GetReference() {
            return $this->ref;
        }
    
        // Afficher

        function Afficher() {
            echo("<tr>");
                echo("<td>".$this->ref."</td>");
                echo("<td>".$this->designation."</td>");
                echo("<td>".$this->prixUnit."</td>");
            echo("</tr>");
        }

    }
?>