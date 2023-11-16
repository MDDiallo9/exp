<?php

session_start();


echo $_SESSION["CouleurFav"];

if($_SESSION["IsConnected"]){
    echo "Vous êtes bien connecté";
} else {
    echo "Vous n'êtes pas connecté";
}