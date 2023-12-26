<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data from the POST request
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = ''; // Replace with the actual phone input field name if available in the form
    $username = $_POST['username'];
    $password = $_POST['signin-password'];
    $passwordConfirmation = $_POST['password_confirmation'];

    // Check if the passwords match
    if ($password !== $passwordConfirmation) {
        // Redirect with an error message if passwords do not match
        header("Location: signup.php?error=Passwords do not match");
        exit();
    }

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirect with an error message if the email is not valid
        header("Location: signup.php?error=Invalid email address");
        exit();
    }

    // Check if the email is already taken
    $checkEmailQuery = "SELECT * FROM client WHERE email = ?";
    $checkEmailStmt = $conn->prepare($checkEmailQuery);
    $checkEmailStmt->bind_param('s', $email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();

    if ($checkEmailResult->num_rows > 0) {
        // Email is already taken, redirect with an error message
        header("Location: signup.php?error=Email is already taken");
        exit();
    }

    // Prepare and execute the SQL statement to insert user data into the database
    $insertQuery = "INSERT INTO client (firstname, lastname, email, phone, username, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param('ssssss', $firstName, $lastName, $email, $phone, $username, $hashedPassword);

    if ($stmt->execute()) {
        $userId = $stmt->insert_id;
        $_SESSION['user'] = array(
            'id' => $userId,
            'firstname' => $firstName,
            'lastname' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'username' => $username
        );
        header("Location: index.php");
        exit();
    } else {
        // Redirect with an error message if the insertion fails
        header("Location: signup.php?error=Error inserting user data");
        exit();
    }

    // Close the prepared statements and database connection
    $checkEmailStmt->close();
    $stmt->close();
    $conn->close();
} else {
    // Redirect if the form is not submitted using POST method
    header("Location: signup.php");
    exit();
}
