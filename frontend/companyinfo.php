<?php
// Assuming you have a valid database connection in connection.php
include("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $bio = $_POST["bio"];

    // Update query
    $sql = "UPDATE company SET Name = ?, phone_Number = ?, Email = ? ,bio=? WHERE id = 1";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $bio);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Check if the update was successful
        header("location:settings.php");
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the update statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
