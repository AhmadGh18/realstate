<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $realstateId = $_GET['id']; // Assuming you are passing the id through GET parameter
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $kitchens = $_POST['kitchens'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $area = $_POST['area'];
    $status = $_POST['status'];
    $propertyType = $_POST['PropertyType'];
    $options = implode(',', $_POST['options']); // Convert options array to comma-separated string
    $forwhat = $_POST['forwhat'];
    // Update real estate information
    $updateSql = "UPDATE realstate SET 
        title = '$title', 
        description = '$description', 
        location = '$location', 
        price = '$price', 
        kitchens = '$kitchens', 
        bedrooms = '$bedrooms', 
        bathrooms = '$bathrooms', 
        area = '$area', 
        status = '$status', 
        PropertyType = '$propertyType', 
        options = '$options',
        forwhat='$forwhat'
        WHERE id = $realstateId";

    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        // Update thumbnail image
        if ($_FILES['thumbnail']['name']) {
            $thumbnailPath = 'uploads/' . $_FILES['thumbnail']['name'];
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnailPath);

            $updateThumbnailSql = "UPDATE realstate SET thumbnail = '$thumbnailPath' WHERE id = $realstateId";
            mysqli_query($conn, $updateThumbnailSql);
        }

        // Update multiple images
        if ($_FILES['file-input']['name']) {
            foreach ($_FILES['file-input']['tmp_name'] as $key => $tmp_name) {
                $imgurl = 'uploads/' . $_FILES['file-input']['name'][$key];
                move_uploaded_file($tmp_name, $imgurl);

                $insertImageSql = "INSERT INTO images (realstate_id, imgurl) VALUES ($realstateId, '$imgurl')";
                mysqli_query($conn, $insertImageSql);
            }
        }

        header("Location:docs.php");
    } else {
        echo "Error updating real estate information: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
mysqli_close($conn);
