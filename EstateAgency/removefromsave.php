<?php
session_start();
if (!isset(($_SESSION['user_id']))) {
    header("location:login.php");
    exit();
}
include("connection.php");

$user_id = $_SESSION['user_id'];

// Assuming you are passing the real estate ID through POST
$real_estate_id = $_GET['real_estate_id'];

// Delete the corresponding entry from the saved_item table
$delete_sql = "DELETE FROM saved_item WHERE clientid = '$user_id' AND realstateid = '$real_estate_id'";
mysqli_query($conn, $delete_sql);
header("location:mysaved.php");
exit();
