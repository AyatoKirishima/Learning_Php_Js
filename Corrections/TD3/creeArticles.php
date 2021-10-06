<?php

include 'article.class.php';


$articles = array(1 => new Article('truc', 10, 1)
				, 2 => new Article('machin', 12, 2));

file_put_contents('data/articles', serialize($articles));
// chaque étudiant donne les droits 777 au dossier 
// et sous-dossiers/fichiers
?>