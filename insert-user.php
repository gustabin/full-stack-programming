<?php
$connection = new mysqli("localhost", "root", "", "my_app");
if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
}
$sql = "INSERT INTO users (name, email, password) VALUES ('Jane Doe', 'jane@example.com', 'password123')";
if ($connection->query($sql) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $connection->error;
}
$connection->close();
