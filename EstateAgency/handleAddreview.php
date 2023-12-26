<?php
include("connection.php"); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data from the POST request
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and execute the SQL statement to insert review data into the database
    $insertQuery = "INSERT INTO reviews (Full_name, email, subject, Message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param('ssss', $fullName, $email, $subject, $message);

    if ($stmt->execute()) {
        // Review added successfully
        echo "Review added successfully!";
    } else {
        // Error inserting review data
        echo "Error adding review: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if the form is not submitted using POST method
    header("Location: index.php"); // Replace with the actual URL
    exit();
}
