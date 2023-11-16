<?php

unset($_SESSION["name"]);
unset($_SESSION["user_id"]);
unset($_SESSION["status"]);
setcookie(session_name(), '', -1);
session_unset();





header('Location: /');