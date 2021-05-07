<?php

$db = null;

try {
    $config = include($_SERVER['DOCUMENT_ROOT'].'/config.php');

    $db = new PDO("mysql:host=" . $config['192.168.1.61'] . ";dbname=" . $config['mysql'] . ";port=" . $config['3306'], $config['root'], $config['QuickTime++8905']);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    $db = null;
}
