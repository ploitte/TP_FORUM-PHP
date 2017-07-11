<?php

    function connectToBdd(){
        $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');
        return $bdd;
    }

    function getPage(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            }else 
                {
                    $page = "inscription";
                }
         return $page;
    }

    function takeCat(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM f_categories ORDER BY nom");
        $pdo -> execute(array());
        return $pdo;
    }

    function takeSousCat(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM f_sous_categories WHERE id_categories = ?  ORDER BY nom");
        return $pdo;
    }

    function inscription($arg1, $arg2, $arg3){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("INSERT INTO users(username, email, password) VALUES(?, ?, ?)");
        $pdo -> execute(array($arg1, $arg2, $arg3));
        return $pdo;
    }

    function exist($arg1, $arg2){
        $connect = connectToBdd();
        $req = $connect -> prepare("SELECT * FROM users WHERE $arg1 = ?");
        $req -> execute(array($arg2));
        $exist = $req -> rowCount();

        return $exist;
    }

    function getUsers(){
         if(isset($_GET['username']))
        {
            $user = $_GET['username'];
            $connect = connectToBdd();
            $pdo = $connect -> prepare("SELECT username, email FROM users WHERE username = ?");
            $pdo -> execute(array($user));
            return $pdo;
        }    
    } 

    function insertPost($arg1, $arg2){
        
        $connect = connectToBdd($arg1, $arg2);
        $pdo = $connect -> prepare("INSERT INTO f_post(sujet, texte) VALUES(?, ?)");
        return $pdo -> execute(array($arg1, $arg2));

    }





    

?>