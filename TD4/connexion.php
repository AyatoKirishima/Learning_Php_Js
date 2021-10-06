<?php 
try
    {
        $objPdo = new PDO

        ('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=muller851u_SiteVente','muller851u_appli','Riquzo_8');

        echo "Connexion ok<br/>\n";
    }
    catch( Exception $exception )
    {
        die($exception->getMessage());
    }
?>