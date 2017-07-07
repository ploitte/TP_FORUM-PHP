<?php
    include("models/fonction.php");

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else 
    {
        $page = "accueil";
    }


    switch($page){

    case "accueil":

    $cat = takeCat("nom", "f_categories");
    break;
    }

  include("views/Accueil.php");
?>