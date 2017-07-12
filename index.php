<?php
    
    session_start();
    

    include("models/fonction.php");

    $page = getPage();

    switch($page){

        case "inscription":
            include("views/inscription.php");
            break;

        case "connexion":
            include("views/connexion.php");
            break;
         
        case "lobby":
            $cat = takeCat();
            include("views/lobby.php");
            break;

        case "categorie":
            $sCat = takeSousCatV2($_GET['id']);
            include("views/categorie.php");
            break;

        case "sujet":
            $sujet = searchSujet($_GET['souscat']);
            include("views/sujet.php");
            break;

    }

?>