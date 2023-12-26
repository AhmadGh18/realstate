<?php
session_start();
include("connection.php");
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
}
// Get the realstate ID from the URL parameter
$id = $_GET['id'];

$userId = $_SESSION['user_id'];

// Check if the user has already saved this item
$checkQuery = "SELECT * FROM saved_item WHERE realstateid = $id AND clientid = '$userId'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // The user has already saved this item, handle accordingly (e.g., show a message)
    header("Location: property-single.php?id=$id&error=Item already saved");
} else {
    // User has not saved this item, proceed to save it
    $insertQuery = "INSERT INTO saved_item (realstateid, clientid) VALUES ($id, '$userId')";
    $insertResult = mysqli_query($conn, $insertQuery);

    if ($insertResult) {
        // Item saved successfully
        header("Location: property-single.php?id=$id&error=added successfully");
    } else {
        // Error in saving item
        echo "Error saving item: " . mysqli_error($conn);
    }
}
