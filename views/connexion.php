<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
    
    <form action="./services/connexion.php" method = "POST">
    <table>
        <tr>
            <td>
                <input id="user" type="text" name = "username" placeholder="Username">
            <td>
        </tr>
        <tr>
            <td>
                <input id="mdp" type="password" name = "password" placeholder="Password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value='Connexion'> 
            </td>        
        </tr>
    </form>

    
</body>
</html>