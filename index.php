<?php
    include("models/fonction.php");

    $page = getPage();

    switch($page){

        case "inscription":
            include("views/form_inscription.php");
            break;

        case "connexion":

            include("views/form_connexion.php");
            break;

        case "accueil":
            
            $cat = takeCat("nom", "f_categories");
            include("views/Accueil.php");
            break;

        }


?>