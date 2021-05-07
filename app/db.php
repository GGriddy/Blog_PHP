<?php

$db = null;

try {
    $config = include($_SERVER['DOCUMENT_ROOT'].'/php_simple/config.php');

    $db = new PDO("mysql:host=" . $config['localhost'] . ";dbname=" . $config['blog_php'] . ";port=" . $config['3306'], $config['root'], $config['root']);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    $db = null;
}
