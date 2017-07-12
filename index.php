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

<<<<<<< HEAD
    }
=======
>>>>>>> c9da14c009913f3db7f69baa3d07011be476f47e

?>