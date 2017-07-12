<?php 

    session_start();

    require("../models/fonction.php");

    if(isset($_POST['titre']) AND isset($_POST['texte']) AND isset($_POST['getID']))
    {
        $getId = $_POST["getID"];
        $titre = $_POST["titre"];
        $texte = $_POST["texte"];
        $flag = false;
        
        if(!empty($titre) AND !empty($texte))
        {
            insertSujet($_SESSION['username'], $titre, $texte);
            $flag = true;
        }

        if($flag == true)
        {
            header("location: ../index.php?page=sujet&souscat=" . $getId);
        }
    }

?>