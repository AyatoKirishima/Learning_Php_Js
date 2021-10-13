<?php
    include_once 'connexion.php';
    echo($_GET["idSite"]);
    $objPdo->query("DELETE FROM Sites WHERE idSite =". $_GET["idSite"]);
    //$delete_stmt->bindValue(1, $_GET["idSite"], PDO::PARAM_INT);
    header('Location:sites.php');
?>