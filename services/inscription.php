<?php 
 
require("../models/fonction.php");
 
if( isset($_POST["username"])
    AND isset($_POST["email"])
    AND isset($_POST["verifEmail"])
    AND isset($_POST["password"])
    AND isset($_POST["verifPassword"]))
{

    $pseudo = htmlspecialchars($_POST["username"]);
    $mail = htmlspecialchars($_POST["email"]);
    $verifMail = htmlspecialchars($_POST["verifEmail"]);
    $password = sha1($_POST["password"]);
    $verifPass = sha1($_POST["verifPassword"]);


    $pseudoLength =  strlen($pseudo);
    $passwordLength =  strlen($password);
    $flag = false;

        if( !empty($pseudo)
            AND !empty($mail)
            AND !empty($verifMail)
            AND !empty($password)
            AND!empty($verifPass))
            {
                if($pseudoLength >= 4)
                {
                        if(exist("username", $pseudo) == 0)
                        { 
                            if($passwordLength >= 8)
                            {
                                if($mail == $verifMail)
                                {
                                    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                                    {
                                        if( exist("email", $mail) == 0)
                                        {
                                            if($password == $verifPass)
                                            {
                                                inscription($pseudo, $mail, $password);
                                                $flag = true;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                     }
                }   
            }

            if($flag == true)
            {
                header("location: ../index.php?page=lobby");
            }else{
                  header("location: ../index.php?page=lobby"); 
            }

?>