<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        // Get user ID from the session
        $userId = $_SESSION['id'];
        include("connection.php");

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get user's old password from the database
        $oldPasswordQuery = "SELECT password FROM users WHERE id = $userId";
        $oldPasswordResult = $conn->query($oldPasswordQuery);

        if ($oldPasswordResult->num_rows > 0) {
            $row = $oldPasswordResult->fetch_assoc();
            $oldPasswordDB = $row['password'];

            // Verify if the old password matches the one entered in the form
            $oldPasswordForm = $_POST['oldpassword'];

            if (password_verify($oldPasswordForm, $oldPasswordDB)) {
                // Check if the new passwords match
                $newPassword = $_POST['Newpassword'];
                $repeatedPassword = $_POST['repeatedpassword'];

                if ($newPassword === $repeatedPassword) {
                    // Hash the new password
                    $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                    // Update the user's password in the database
                    $updatePasswordQuery = "UPDATE users SET password = '$hashedNewPassword' WHERE id = $userId";
                    $updatePasswordResult = $conn->query($updatePasswordQuery);

                    if ($updatePasswordResult) {
                        header("location:account.php");
                    } else {
                        header("location:reset-password.php?error=Error updating password");
                    }
                } else {
                    header("location:reset-password.php?error=New Password doesnt match");
                }
            } else {
                header("location:reset-password.php?error=old Password is incorrect");
            }
        } else {
            echo "Error fetching old password: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "User not logged in!";
    }
}
