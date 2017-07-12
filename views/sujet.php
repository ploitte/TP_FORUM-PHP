<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/sujet.css">
    <title>Sujet</title>
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
            <td class="cat">Pseudo</td>
            <td class="cat">Titre</td>
            <td class="cat">Date</td>
        </tr>

        <?php foreach($sujet as $c){ ?>
        <tr>
            <td><?php echo $c['pseudo']; ?></td>
            <td><?php echo $c['titre']; ?></td>
            <td><?php echo $c['s_date']; ?></td>
        </tr>
        <?php } ?>
    </table>

</div>

<form action="./services/sujet.php" method ="POST">
    <input type="text" name="titre" placeholder = "Titre du sujet"><br>
    <textarea name="texte" placeholder = "Texte sujet"></textarea><br>  
    <input type="hidden" value="<?php echo $_GET['id']; ?>" name="getID"><br>
    <input type="submit">
</form>

<!--____________________FOOTER____________________-->

</body>
</html>