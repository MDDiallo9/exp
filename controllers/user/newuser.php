<?php
require 'models/Database.php';

$requete = "SELECT * FROM user";
$newUser = $connexion->query($requete)->fetchAll();
/* dbug($_FILES); */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $avatar = $_FILES["avatar"]["name"];
    $newUser = $connexion->prepare('INSERT INTO user (name,email,password,avatar) VALUES (:name , :email,:password,:avatar)');
    

    $newUser->bindValue(':name', $name, PDO::PARAM_STR);
    $newUser->bindValue(':email', $email, PDO::PARAM_STR);
    $newUser->bindValue(':password', $password, PDO::PARAM_STR);
    $newUser->bindValue(':avatar', $avatar, PDO::PARAM_STR);

    /* $uploaddir = "upload/";
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile); */

    $newUser->execute();
    header('Location: /listusers');
}
require "views/newuser.view.php";
