<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/inscription.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/easing.js"></script>
</head>
<body>
    <form action="services/inscription.php" id="formulaire" method = "POST">
        <input id="user" type="text"  name = "username" placeholder="Username"><span class="errorPseudo"></span><br>
        <input id="mail" type="email"  name = "email" placeholder="Email"><span class="errorMail"></span><br>
        <input id="verMail" type="email" name = "verifEmail" placeholder="Email verification"><span class="erroVeriMail"></span><br>
        <input id="mdp" type="password"  name = "password" placeholder="Password"><span class="errorPassword"></span><br>
        <input id="verMdp" type="password" name = "verifPassword" placeholder="Password verification"><span class="errorVeriPass"></span><br>
        <div class="cont_button"><input id="sub" type="submit"></div>
    </form>
<br><br><br>


<a href="index.php?page=connexion">Connexion</a>
<script type="text/javascript" src="./js/inscription.js"></script>
</body>
</html>


