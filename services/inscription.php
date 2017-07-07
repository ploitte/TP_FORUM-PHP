<?php 


if( isset($_POST["username"])
    AND isset($_POST["email"])
    AND isset($_POST["verifEmail"])
    AND isset($_POST["password"])
    AND isset($_POST["verifPassword"]))
{

    $pseudo = $_POST["username"];
    $mail = $_POST["email"];
    $verifMail = $_POST["verifEmail"];
    $password = $_POST["password"];
    $verifPass = $_POST["veriPassword"];

        if( !empty($pseudo)
            AND !empty($mail)
            AND !empty($verifMail)
            AND !empty($password)
            AND!empty($verifPass))
        {
           if(count($password) >= 8 )
           {
               if($password == $verifPass)
               {
                   if(preg_match("##", "Vladimir. Kramnik"))
               }
           }
        }
}


?>