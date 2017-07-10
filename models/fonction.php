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

    function takeCat($table, $bdd){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT $table FROM $bdd");
        $pdo -> execute(array());
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






    

?>