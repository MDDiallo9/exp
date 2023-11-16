<?php
require 'models/Database.php';

$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    //$errors = '';
    dbug($_POST);
    


    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $author = trim(filter_var($_POST['author'], FILTER_SANITIZE_NUMBER_INT));
    $image = $_FILES["image"]["name"];
    

    if (strlen($title) === 0) :
        $errors[] = 'Titre vide !!!';
    endif;

    if (strlen($title) >= 100) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) === 0) :
        $errors[] = 'Contenu vide !!!';
    endif;

    if (strlen($content) >= 1000) :
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    endif;

    if(empty($_POST['author']) || strlen($_POST['author'] === 0)) :
        $errors[] = 'Aucun auteur séléctionné !!!';
    endif;

/*     if (strlen($title) >= 100 || strlen($title) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif; */

/*     if (strlen($title) >= 100 || strlen($title) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) >= 100 || strlen($content) === 0) :
        $errors[] = 'Contenue trop long bouuuu !!!';
    endif; */

/*     if (strlen($title) >= 100 || strlen($title) === 0 || strlen($content) >= 1000 || strlen($content) === 0) :
        $errors = 'Le titre ou le contenue de votre note est incorrect !!!';
    endif; */

    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id,image) VALUES (:title , :content , :user_id,:image)');
        
        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $author, PDO::PARAM_INT);
        $noteNew->bindValue(':image', $image, PDO::PARAM_STR);
        
        $noteNew->execute();

        $lastInsertId = $connexion->lastInsertId();
        // UPLOAD
        
        $uploaddir = "upload/";
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


        dbug($_FILES);
        dbug($uploadfile);
        if($lastInsertId) :
            header('Location: /notes');
            exit();
        else:
            abort();
        endif;
    endif;

endif;

include 'views/note-new.view.php';
