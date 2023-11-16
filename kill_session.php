<?php

session_start();


$_SESSION = [];
setcookie("PHPSESSID",'', -1);

session_unset();

header("Location: session.php");
