<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <script type="text/javascript" src="../js/connexion.js"></script>
</head>
<body>

    <form action="./services/connexion.php" method = "POST">
        <input id="user" type="text" name = "username" placeholder="Username"><br>
        <input id="mdp" type="password" name = "password" placeholder="Password"><br>
        <div id="sub" class="cont_button"><input type="submit" value='Connexion'></div>
    </form>

    <div></div>

</body>
</html>
