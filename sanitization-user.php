<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = $_POST["age"];
    // Validations
    if (empty($name) || strlen($name) < 3 || strlen($name) > 50) {
        die("Invalid name.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email.");
    }
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        die("Invalid age.");
    }
    // Sanitization
    $name = htmlspecialchars($name, ENT_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo "Data validated and sanitized correctly.";
}
?>
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Age: <input type="number" name="age" required><br>
    <button type="submit">Submit</button>
</form>