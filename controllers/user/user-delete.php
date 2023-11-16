<?php
require 'models/Database.php';

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('DELETE FROM user WHERE user_id = :id');

$note->bindParam(':id', $id, PDO::PARAM_INT);

$note->execute();

header('Location: /listusers');
exit();