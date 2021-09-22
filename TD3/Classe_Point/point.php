<!-- Écrire le code PHP de la classe Point. -->

<?php class Point
{
    var $x; 
    var $y;
    var $color;

    // Définir un constructeur
    function __construct($x, $y)
    {
    $this->x = $x;
    $this->y = $y;
    }
    // Exemple d'utilisation d'un constructeur
    var $p1 = new Point(2,4, "jaune");  

    // Définir une méthode Afficher()
    function Afficher()
    { 
        return ("[".$this->x.",".$this->y."] : ".$this->color); 
    }
}
