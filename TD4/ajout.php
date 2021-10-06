<!-- Ajouter un site à la table Sites -->

<?php
    include_once "connexion.php";
    include_once "sites.php";

    // Préparation insertion
    $insert_stmt = $objPdo->prepare("INSERT INTO TestPrep (id,ligne) VALUES( ? , ? ) ");

    $insert_stmt->bindValue(1, $nb, PDO::PARAM_STR);
    $insert_stmt->bindValue(2, $maligne, PDO::PARAM_STR);
    $insert_stmt->execute();

?>