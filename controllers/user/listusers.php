<?php
require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user ORDER BY user_id DESC')->fetchAll();



require 'views/listusers.view.php';