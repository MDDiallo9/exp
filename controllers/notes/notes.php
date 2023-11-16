<?php
require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note ORDER BY id DESC')->fetchAll();

require 'views/notes.view.php';