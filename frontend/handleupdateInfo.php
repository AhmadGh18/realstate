<?php
// Assuming you have a valid database connection
session_start();
include("connection.php");

// Retrieve user ID from session
$userID = $_SESSION['id'];

// Collect form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Generate the username as firstname + lastname
$username = strtolower($firstname . $lastname);

// Update user information in the database
$query = "UPDATE users SET 
            first_name = ?,
            last_name = ?,
            email = ?,
            phone = ?
          WHERE id = ?";

// Use prepared statements to prevent SQL injection
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssssi", $firstname, $lastname, $email, $phone, $userID);
$result = mysqli_stmt_execute($stmt);

// Check if the update was successful
if ($result) {
    echo "User information updated successfully!";
    header("location:account.php");
} else {
    echo "Error updating user information: " . mysqli_error($conn);
}

// Check if a file was uploaded
if ($_FILES['upload']['size'] > 0) {
    $uploadsDirectory = 'uploads/';
    $uploadFile = $uploadsDirectory . basename($_FILES['upload']['name']);

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadFile)) {
        echo "Profile picture uploaded successfully!";
        // Save the file URL in the database
        $updateProfilePicQuery = "UPDATE users SET profile_pic_url = ? WHERE id = ?";
        $stmtPic = mysqli_prepare($conn, $updateProfilePicQuery);
        mysqli_stmt_bind_param($stmtPic, "si", $uploadFile, $userID);
        mysqli_stmt_execute($stmtPic);
        header("location:account.php");
    } else {
        echo "Error uploading profile picture.";
    }
}

// Close the prepared statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
