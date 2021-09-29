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

        function GetPrix($prixUnit) {
            return $this->prixUnit;
        }

        // Désignation

        function SetDesignation($designation) {
            $this->designation = $designation;
        }

        function GetDesignation($designation) {
            return $this->designation;
        }

        // Référence

        function SetReference($ref) {
            $this->ref = $ref;
        }

        function GetReference($ref) {
            return $this->ref;
        }
    
        // Afficher

        function Afficher() {
            echo("<tr>");
            echo("<td> $ref </td>");
            echo("<td> $designation </td>");
            echo("<td> $rpixUnitaire </td>");
        }

    }
?>