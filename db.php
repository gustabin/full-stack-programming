<?php
$host = "localhost";
$dbname = "my_app";
$username = "root";
$password = "";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection error: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
