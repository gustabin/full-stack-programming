<?php
$connection = new mysqli("localhost", "root", "", "my_app");
$sql = "DELETE FROM users WHERE email='jane@example.com'";
if ($connection->query($sql) === TRUE) {
    echo "User deleted successfully";
} else {
    echo "Delete error: " . $connection->error;
}
$connection->close();
