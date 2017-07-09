<?php 
    session_start();

    require("../models/fonction.php");
 
    if(isset($_POST["username"]) 
    AND isset($_POST["password"]))
    {
        $pseudo = htmlspecialchars($_POST["username"]);
        $password = sha1($_POST["password"]);
        $connect = connectToBdd();
        $flag = false;
        if(!empty($pseudo) 
        AND !empty($password))
        {
            $pdo = $connect -> prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $pdo -> execute(array($pseudo, $password));
            $exist = $pdo -> rowCount();

            if($exist == 1)
            {
                    $userinfo = $pdo -> fetch();
                    $_SESSION['id'] = $userinfo["id"];
                    $_SESSION['username'] = $userinfo["username"];
                    $_SESSION['mail'] = $userinfo["email"];  
                    $flag = true;
            }
        }
    }

    if($flag == true)
    {
        header("location: ../index.php?page=accueil&id=". $_SESSION["id"]);
    }else{
        header("location: ../index.php?page=connexion");
    }

    

?>






