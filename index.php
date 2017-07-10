<?php
    
    session_start();
    

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
            $tab =  getUsers();
            $cat = takeCat("nom", "f_categories");
            $username = $_SESSION['username'];
            include("views/Accueil.php");
            break;

        case "profil":

            include("views/profil.php");
            break;
        }


?>