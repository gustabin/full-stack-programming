<?php
$connection = new mysqli("localhost", "root", "", "my_app");
$sql = "UPDATE users SET name='Ana G. López' WHERE email='jane@example.com'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Update error: " . $connection->error;
}
$connection->close();
