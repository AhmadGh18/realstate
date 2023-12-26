<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<style>
.gg {
    margin: 20px;
}
</style>

<body>

    <?php
    include("connection.php");

    // Assuming you have a session or user authentication in place
    // Replace $_SESSION['user_id'] with your actual session variable or user ID retrieval method

    if (!isset($_SESSION['user_id'])) {
        header("location:login.php");
    }
    $user_id = $_SESSION['user_id'];

    // Fetch saved real estate items for the logged-in user
    $sql = "SELECT realstate.*
        FROM realstate
        INNER JOIN saved_item ON realstate.id = saved_item.realstateid
        WHERE saved_item.clientid = '$user_id'";

    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($res)) {

        echo '<div class="col-md-4 gg">';
        echo '    <div class="card-box-a card-shadow">';
        echo '        <div class="img-box-a">';
        echo '            <img src="../frontend/' . $row["thumbnail"] . '" alt="" class="img-a img-fluid">';
        echo '        </div>';
        echo '        <div class="card-overlay">';
        // Add other details as needed
        echo '            <div class="card-overlay-a-content">';
        echo '                <div class="card-header-a">';
        echo '                    <h2 class="card-title-a">';
        echo '                        <a href="#">' . $row['title'] . '</a>';
        echo '                    </h2>';
        echo '                </div>';
        echo '                <div class="card-body-a">';
        // Add other details as needed
        echo '                    <div class="price-box d-flex">';
        echo '                        <span class="price-a">' . $row['forwhat'] . ' | ' . $row["price"] . '</span>';
        echo '                    </div>';
        echo '                    <a href="property-single.php?id=' . $row['id'] . '" class="link-a">Click here to view <span class="ion-ios-arrow-forward"></span></a>';
        echo '                </div>';
        echo '                <div class="card-footer-a">';
        // Add other details as needed
        echo '                    <ul class="card-info d-flex justify-content-around">';
        echo '                        <li>';
        echo '                            <h4 class="card-info-title">Area</h4>';
        echo '                            <span>' . $row["area"] . ' m<sup>2</sup></span>';
        echo '                        </li>';
        echo '                        <li>';
        echo '                            <h4 class="card-info-title">Beds</h4>';
        echo '                            <span>' . $row["bedrooms"] . '</span>';
        echo '                        </li>';
        echo '                        <li>';
        echo '                            <h4 class="card-info-title">Baths</h4>';
        echo '                            <span>' . $row["bathrooms"] . '</span>';
        echo '                        </li>';
        echo '                    </ul>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    ?>
    <form action="removefromsave.php" method="get">
        <input type="hidden" name="real_estate_id" value="<?php echo $row["id"]; ?>">
        <button class="btn btn-primary" type="submit">Remove from saved</button>
    </form>

    <?php
    }
    ?>

</body>

</html>