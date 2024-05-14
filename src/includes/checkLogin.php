<?php
require 'connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM Users WHERE email = ?");

        $stmt->bind_param("s", $email);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $user['name'];

                header("Location: ../public/main.html");
                exit();
            } else {
                echo "Wrong password.";
            }
        } else {
            echo "No user found with this email.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Wrong request method.";
}
?>