<?php
require 'models/Database.php';

$id = $_GET['id'];

$userUpdate = $connexion->query("SELECT * FROM user WHERE user_id = $id")->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dbug($_POST);
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $userUpdate = $connexion->prepare("UPDATE  user SET name=:name,email=:email WHERE user_id = $id");
    

    $userUpdate->bindValue(':name', $name, PDO::PARAM_STR);
    $userUpdate->bindValue(':email', $email, PDO::PARAM_STR);
    /* $newUser->bindValue(':id', $id, PDO::PARAM_INT); */


    $userUpdate->execute();
    header('Location: /listusers');
}


require 'views/user-update.view.php';