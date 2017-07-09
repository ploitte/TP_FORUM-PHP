<?php

    function connectToBdd(){
        $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','');
        return $bdd;
    }

    /* voir commentaire dans index.php concernant cette fonction */
    function takeCat($table, $bdd){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT $table FROM $bdd");
        $pdo -> execute(array());
        return $pdo;
    }

?>