<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages d'erreur</title> 
    
    <?php 
    function dire_texte ( $qui = 'Défaut' , $texte = 'Bonjour' ) {
        if (empty( $qui )) { // $qui est vide , on retourne faux 
            return false; 
            } 
            else { 
                echo "$texte $qui" ; // on affiche le texte 
                return true; // fonction exécutée avec succès 
            } 
    }
?>
</head>

<body>
    <?php 
        dire_texte ("cher phpeur" , "Bienvenue" ); 
        echo "<br />"; 
        dire_texte ("cher phpeur" ); 
        echo "<br />"; 
        /* dir_texte () : n'est pas défini, on obtient l'errreur :
        * Fatal error: Uncaught Error: Call to undefined function dir_texte() on line 29
        * Envoyé par le serveur PHP
        *
        * La 2e erreur est une abscence d'argument dans la () de dire_texte
        * Modifier plus haut $qui = "Defaut"
        * Cela permet d'appeler la fonction sans arguments ;)
        */
        dire_texte () ;
    ?>
</body>

</html>