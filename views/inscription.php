<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="./css/inscription.css">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/easing.js"></script>
</head>
<body>
    <div class="contForm">
        <form action="services/inscription.php" id="formulaire" method = "POST">
    
            <input id="user" type="text"  name = "username" placeholder="Username"><span class="errorPseudo"></span>
            <input id="mail" type="email"  name = "email" placeholder="Email"><span class="errorMail"></span>
            <input id="verMail" type="email" name = "verifEmail" placeholder="Email verification"><span class="erroVeriMail"></span>
            <input id="mdp" type="password"  name = "password" placeholder="Password"><span class="errorPassword"></span>
            <input id="verMdp" type="password" name = "verifPassword" placeholder="Password verification"><span class="errorVeriPass"></span>
            <div class="cont_button"><input id="sub" type="submit"></div></td></tr>

        </form>
    </div>

<script type="text/javascript" src="./js/inscription.js"></script>
</body>
</html>