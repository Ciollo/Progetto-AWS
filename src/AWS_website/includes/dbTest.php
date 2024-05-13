<?php
$host = 'mysql-2';
$db   = 'prova';
$user = 'root';
$pass = 'strong_password';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
