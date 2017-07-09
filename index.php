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
    /* Alfonso:bien joué pour les variables dans les requêtes
     * par contre tu as mis des nom erronés le paramètre nom est en fait un champ
     * le paramètre bdd n'est pas un base de données mais une table
     * fait attention quand tu regardes les tutos sur internet
     */
    $cat = takeCat("nom", "f_categories");
    /*
     * Alfonso:Chaque view est sensé être dans la page qui lui correspond
     * dans notre cas dans le case "acceuile de notre switch et donc la ligne
     * include("views/Accueil.php");
     * doit être ici mais tu l'auras vu quand tu rajouteras d'autres pages
     * */
    break;
    }
    /* Alfonso: merci pour le fichier SQL */


  include("views/Accueil.php");
?>