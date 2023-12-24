<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Details</title>
    <link rel="stylesheet" href="font.css">
    <style>
        /* Add your CSS styling here */
        .real-estate-details {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .descimg {
            height: 200px !important;
            width: 200px;

        }
    </style>
</head>

<body>

    <?php
    // Assuming you have a valid database connection
    include("connection.php");

    // Replace 'your_specific_id' with the actual ID you want to use
    $realstateId = $_GET['id'];

    // Query to select real estate information
    $sqlRealstate = "SELECT * FROM realstate WHERE id = $realstateId";
    $resultRealstate = mysqli_query($conn, $sqlRealstate);

    // Query to select images related to the real estate
    $sqlImages = "SELECT * FROM images WHERE realstate_id = $realstateId";
    $resultImages = mysqli_query($conn, $sqlImages);

    // Check if the queries were successful
    if ($resultRealstate && $resultImages) {
        // Fetch real estate data
        $realstateData = mysqli_fetch_assoc($resultRealstate);
        $title = $realstateData['title'];
        $location = $realstateData['location'];
        $description = $realstateData['description'];
        $bedrooms = $realstateData['bedrooms'];
        $bathrooms = $realstateData['bathrooms'];
        $kitchens = $realstateData['kitchens'];
        $area = $realstateData['area'];
        $status = $realstateData['status'];
        $propertyType = $realstateData['PropertyType'];
        $price = $realstateData['price'];
        $options = $realstateData['options'];
        $thumbnail = $realstateData['thumbnail'];
        $datePosted = $realstateData['date_posted'];

        // Display real estate details
        echo "<div class='real-estate-details'>";
        echo "<h2>$title</h2>";
        echo "<p><strong>Location:</strong> $location</p>";
        echo "<p><strong>Description:</strong> $description</p>";
        echo "<p><strong>Bedrooms:</strong> $bedrooms</p>";
        echo "<p><strong>Bathrooms:</strong> $bathrooms</p>";
        echo "<p><strong>Kitchens:</strong> $kitchens</p>";
        echo "<p><strong>Area:</strong> $area</p>";
        echo "<p><strong>Status:</strong> $status</p>";
        echo "<p><strong>Property Type:</strong> $propertyType</p>";
        echo "<p><strong>Price:</strong> $price</p>";
        echo "<p><strong>Options:</strong> $options</p>";
        echo "<img src='$thumbnail' alt='Real Estate Thumbnail'>";
        echo "<p><strong>Date Posted:</strong> $datePosted</p>";
        echo "</div>";

        // Display images
        echo "<div class='image-container'>";
        while ($imageData = mysqli_fetch_assoc($resultImages)) {
            $imageUrl = $imageData['imgurl'];
            echo "<img class=descimg src='$imageUrl' alt='Real Estate Image'> ";
        }
        echo "</div>";

        // Free the result sets
        mysqli_free_result($resultRealstate);
        mysqli_free_result($resultImages);
    } else {
        // Handle the case where the queries failed
        echo "Error executing the queries: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

</body>

</html>