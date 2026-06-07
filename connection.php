<?php
$servidor = "localhost";
$user = "root";
$password = "";
$database = "my_app";
// Create connection
$connection = new mysqli($servidor, $user, $password, $database);
// Check connection
if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
}
echo "Successful connection to the database";
