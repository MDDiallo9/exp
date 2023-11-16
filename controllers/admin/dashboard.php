<?php
require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id ORDER BY id DESC')->fetchAll();



require 'views/dashboard.view.php';
