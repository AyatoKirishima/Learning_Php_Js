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
    var $p1 = new Point(2, 4, "jaune");

    // Définir une méthode Afficher()
    function Afficher()
    {
        return ("[" . $this->x . "," . $this->y . "] : " . $this->color);
    }

    // Conflit si distance euclidienne entre ces points < 2.0 && même couleur

    function distance_a($p2)
    {
        $distance = 0;

        $distance = sqrt(pow(($this->x)-($p2->x), 2)-pow(($this->y)-($p2->y),2));

        return $distance;
    }

    function conflit_avec($p2) {
        if (($this->distance > 2) && ($this->color == $p2->color)) {
            echo("");
        }
    }
}
