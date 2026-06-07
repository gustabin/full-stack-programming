<?php
$connection = new mysqli("localhost", "root", "", "my_app");
$sql = "SELECT id, name, email, date_record FROM users";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Name: " . $fila["name"] . " - Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No registered users";
}
$connection->close();
