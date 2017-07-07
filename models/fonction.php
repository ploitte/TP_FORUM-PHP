<?php

    function connectToBdd(){
        $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');
        return $bdd;
    }

    function takeCat($table, $bdd){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT $table FROM $bdd");
        $pdo -> execute(array());
        return $pdo;
    }

?>