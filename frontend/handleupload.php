<?php
include('connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    $bedrooms = $_POST["bedrooms"];
    $bathrooms = $_POST["bathrooms"];
    $kitchens = $_POST["kitchens"];
    $area = $_POST["area"];
    $status = $_POST["status"];
    $price = $_POST["price"];
    $datePosted = date("Y-m-d H:i:s");
    $propertyType = $_POST['PropertyType'];
    $forwhat = $_POST['forwhat'];

    $options = implode(",", $_POST["options"]);

    $sql = "INSERT INTO realstate (title, location, description, bedrooms, bathrooms, kitchens, area, status, PropertyType, price, date_posted, options,forwhat)
            VALUES ('$title', '$location', '$description', '$bedrooms', '$bathrooms', '$kitchens', '$area', '$status', '$propertyType', '$price', '$datePosted', '$options','$forwhat')";

    if ($conn->query($sql) === TRUE) {
        $realEstateId = $conn->insert_id;

        if (!empty($_FILES["thumbnail"]["name"])) {
            $thumbnailPath = "uploads/" . basename($_FILES["thumbnail"]["name"]);
            move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $thumbnailPath);

            $sqlThumbnail = "UPDATE realstate SET thumbnail = '$thumbnailPath' WHERE id = '$realEstateId'";
            $conn->query($sqlThumbnail);
        }

        if (!empty($_FILES["file-input"]["name"])) {
            foreach ($_FILES["file-input"]["tmp_name"] as $key => $tmp_name) {
                $imgPath = "uploads/" . basename($_FILES["file-input"]["name"][$key]);
                move_uploaded_file($tmp_name, $imgPath);

                $sqlImg = "INSERT INTO images (imgurl, realstate_id) VALUES ('$imgPath','$realEstateId')";
                $conn->query($sqlImg);
            }
        }

        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
