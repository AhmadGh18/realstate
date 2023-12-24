<?php
session_start();
include("connection.php");

// Assuming you have a valid session with the user ID
$userID = $_SESSION['id'];

// Collect form data
$creditCard = $_POST['creditcard'];
$password = $_POST['password'];

// Fetch the current password from the database
$sqlPassword = "SELECT password FROM users WHERE id = '$userID'";
$resPassword = mysqli_query($conn, $sqlPassword);

if ($resPassword) {
    $userPassword = mysqli_fetch_assoc($resPassword)['password'];

    // Check if the provided password matches the current password
    if (password_verify($password, $userPassword)) {
        // Passwords match, update the credit card information
        $updateCreditCardQuery = "UPDATE users SET creditCard = '$creditCard' WHERE id = '$userID'";
        $result = mysqli_query($conn, $updateCreditCardQuery);

        if ($result) {
            echo "Credit card information updated successfully!";
        } else {
            echo "Error updating credit card information: " . mysqli_error($conn);
        }
    } else {
        // Passwords do not match
        header("Location: Payment.php?error=password_mismatch");
        exit();
    }
} else {
    echo "Error fetching user information: " . mysqli_error($conn);
}

mysqli_close($conn);
