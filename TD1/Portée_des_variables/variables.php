<html>

<head>
    <title>Portée des variables</title>

    <?php $var1 = "bonjour";
    $var2 = "toto";

    function test()
    {
        static $nb = 0;
        $nb++;
        echo "passage numéro ".$nb."<br>";
        global $var1;
        $var1 = "au revoir ";
        $var2 = " titi ";
        echo $var1." ".$var2."<br>";
    } ?>
</head>

<body>
    <?php echo $var1." ".$var2."<br>";
    test();
    echo $var1." ".$var2."<br>";
    test();
    //echo $nb."<br>"; On ne peut pas afficher nb car c'est une variable locale à la fonction test()

    /* bonjour toto
    * passage numéro 1
    * au revoir titi
    * au revoir toto
    * passage numéro 2
    * au revoir titi */
    ?>
</body>

</html>