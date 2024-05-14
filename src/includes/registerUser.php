<?php
require 'connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $name = $_POST['nome'];
        $surname = $_POST['cognome'];
        $password = $_POST['password'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO Users (name, email, password, surname) VALUES (?, ?, ?, ?)");

            $stmt->bind_param("ssss", $name, $email, $hashed_password, $surname);

            if ($stmt->execute()) {
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $name;

                header("Location: ../public/main.html");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Invalid email address.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Wrong request method.";
}
?>