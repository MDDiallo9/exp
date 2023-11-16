<?php
require 'models/Database.php';

/* dbug($_POST); */

// test request SELECT * FROM `user` WHERE email = 'dojima@d.h'AND password = 'azerty'; 
// var_dump le $_SERVER request method pour vérifier que je suis bien en POST


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $login = $connexion->prepare("SELECT * FROM `user` WHERE email = :email AND password = :password");
    $login->bindParam(':email', $email);
    $login->bindParam(':password', $password);

    $login->execute();
    $result = $login->fetch();
    
    if(empty($result)){
        echo("WRONG LOGIN INFO");
    }else{
        echo "Bienvenue " . $result["name"];
        session_start();
        $id_session = session_id();
        $_SESSION["name"] = $result["name"];
        $_SESSION["user_id"] = $result["user_id"];
        $_SESSION["status"] = $result["status"];
        $_SESSION["avatar"] = $result["avatar"];
        /* dbug($_SESSION); */
        header('Location: /');

    }

    function logUser($user){

    }
    

    /* dbug(($email));
    dbug($_POST); */
}
require("./views/login.view.php");
