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

    /*
     * Alfonso: En général les conditions if imbriquées sont mauvaises
     * car elles ne sont pas indépendantes mais comme tu le fais
     * deja dans le javascript ce n'est pas trop grave
     * */

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
<<<<<<< HEAD
                header("location: ../index.php?page=connexion");
=======
                /* Alfonso: en général après un header je met un die
                * rare mais parfois les page tarde a s'éxecuter et le
                 * reste du code est lu...
                 * */
                header("location: ../index.php?page=lobby");
>>>>>>> c9da14c009913f3db7f69baa3d07011be476f47e
            }else{
                  header("location: ../index.php?page=lobby"); 
            }

?>