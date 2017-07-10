<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/accueil.css">
    <script src="js/jquery.js"></script>
    <script src="js/easing.js"></script>
</head>

<body>

<!--____________________POPUP___________________-->

<!--<div id = "connex" class="popup">
    <?php// include("form_connexion.php"); ?>
</div>

<div id = "inscript" class="popup">
    <?php// include("form_inscription.php"); ?>
</div>-->
    
<!--____________________HEADER____________________-->
<header>
    <div class="leftHead">
        <!-- LOGO -->
    </div>

    <div class="midHead">
        <div class="midTop"></div>
        <div class="midBot"></div>
    </div>

    <div class="rightHead">
    <span><?php echo $username; ?></span><br>
    <a href="./services/deconnexion.php">Se deconnecter</a><br>
    <a href="./index.php?page=profil">Profil</a>
    </div>


</header>

<!--____________________MAIN____________________-->
<div class="main">
    <table>
        <tr id = "cat">
            <td class = "td1"><h2>Categorie</h2></td>
            <td class = "td2"><h2>Nombre de Post</h2></td>
            <td class = "td3"><h2>Dernier Post</h2></td>
        </tr>
        
        <?php 
            while($categorie = $cat -> fetch()){  
        ?>
        
        <tr id = "mess">
            <td class = "td1">
                <h4>
                    <?php echo $categorie["nom"]; ?>
                </h4>
            </td>
            <td class = "td2"><p></p></td>
            <td class = "td3"> ... </td>
        </tr>
        <?php } ?>


        

        
    </table>
</div>



<script src="js/script.js"></script>
</body>
</html>