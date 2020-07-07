<?php

define("BASE_URL", "/portfolio/");
define("ROOT", $_SERVER['HTTP_HOST']);

define('GA', 'UA-171624113-1');

function connectDB()
{
    /* Connexion to the database (voluntarily hidden in Git) */
    $db = new PDO();

    $db->exec('set names utf8');

    if ($db) {
        return $db;
    }
}