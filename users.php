<?php
header("Content-Type: application/json");
include "db.php";
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
        getUsers($mysqli);
        break;
    case "POST":
        addUser($mysqli);
        break;
    case "PUT":
        updateUser($mysqli);
        break;
    case "DELETE":
        deleteUser($mysqli);
        break;
    default:
        echo json_encode(["message" => "Method not allowed"]);
}
function getUsers($mysqli)
{
    $result = $mysqli->query("SELECT * FROM users");
    $users = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($users);
}
function addUser($mysqli)
{
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $mysqli->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $data["name"], $data["email"]);
    $stmt->execute();
    echo json_encode(["message" => "User added"]);
    $stmt->close();
}
function updateUser($mysqli)
{
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $mysqli->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $data["name"], $data["email"], $data["id"]);
    $stmt->execute();
    echo json_encode(["message" => "User updated"]);
    $stmt->close();
}
function deleteUser($mysqli)
{
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $mysqli->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $data["id"]);
    $stmt->execute();
    echo json_encode(["message" => "User deleted"]);
    $stmt->close();
}
