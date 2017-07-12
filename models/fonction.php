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
    //_____________________CATEGORIE_______________________ 

    function takeCat(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM f_categories ORDER BY nom");
        $pdo -> execute(array());
        return $pdo;
    }


    function takeSousCatV2($id){
        $connect = connectToBdd();
        $pdo = $connect->prepare('SELECT * FROM f_sous_categories WHERE id_categories = ?  ORDER BY nom');
        $pdo -> execute(array($id));
        $sousCat = $pdo->fetchAll(PDO::FETCH_ASSOC);
        return $sousCat;
    }

//_____________________INSCRIPTION_______________________ 

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

//_____________________SUJET_______________________ 

function insertSujet($arg1, $arg2, $arg3){
    $connect = connectToBdd();
    $pdo = $connect -> prepare("INSERT INTO f_sujet(pseudo, titre, texte) VALUES(?, ?, ?)");
    $pdo -> execute(array($arg1, $arg2, $arg3));
}

    function searchSujet($id){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM f_sujet WHERE id_souscategorie = ? ORDER BY s_date");
        $pdo -> execute(array($id));
        $sujet = $pdo->fetchAll(PDO::FETCH_ASSOC);
        return $sujet;
    }

?>