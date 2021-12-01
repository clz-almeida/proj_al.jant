<?php

session_start();
$base = '/localhost/proj_al.jant/';

$db_name = 'db_ausion';
$db_host = 'localhost';
$db_user = 'seed';
$db_pass = '1234567';

//$pdo = new PDO("mysql:dbname=".$db_name.";host".$db_host, $db_user, $db_pass);
  $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
