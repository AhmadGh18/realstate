<?php
session_start();
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data without htmlspecialchars
    $email = $_POST["signin-email"];
    $password = $_POST["signin-password"];

    // Query the database to check if the email exists
    $sql = "SELECT * FROM client WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        if (password_verify($password, $hashedPassword)) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            header("Location: index.php");
            exit();
        } else {
            // Authentication failed, redirect back to login with an error message
            $error_message = "Invalid email or password.";
            header("Location: login.php?error=" . urlencode($error_message));
            exit();
        }
    } else {
        $error_message = "Invalid email or password.";
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
}
