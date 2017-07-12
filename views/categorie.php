<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/categorie.css">
    <title>Categorie</title>
</head>
<body>

<!--____________________HEADER____________________-->

<header>
    
    <div class="left"></div>

    <div class="mid"></div>

    <div class="right">
        <a href="./services/deconnexion.php">Deconnexion</a>
    </div>

</header>

<!--____________________MAIN____________________-->

<div class="main">
    
    <table border="1">
        <tr>
            <td class="cat">Catégorie</td>
            <td class="cat">Nb de Sujet</td>
            <td class="cat"> Dernier Sujet</td>
        </tr>
    <?php foreach($sCat as $c){  ?>
        <tr>
            <td><span><a href="./index.php?page=sujet&souscat=<?php echo $c['id']; ?>"> <?php echo $c['nom'];?> </a></span></td>
        </tr>
    <?php } ?>
    </table>

</div>

<!--____________________FOOTER____________________-->
    
</body>
</html>