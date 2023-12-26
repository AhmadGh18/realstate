<?php
// Include your database connection file here
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data without htmlspecialchars
    $name = $_POST["signup-name"];
    $lname = $_POST['signup-Lastname'];
    $email = $_POST["signup-email"];
    $role = $_POST["role"];
    $password = password_hash($_POST["signup-password"], PASSWORD_DEFAULT); // Hash the password
    $phone = $_POST["phone"];
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format, redirect back to signup with an error message

        header("Location: Addemployee.php?error=Invalid email format");
        exit();
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (first_name,last_name, email,phone, role, password) VALUES (?,?,?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $lname, $email, $phone, $role, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        // Registration failed, redirect back to signup with an error message
        $error_message = "Registration failed. Please try again.";
        header("Location: Addemployee.php?error=" . urlencode($error_message));
        exit();
    }
}