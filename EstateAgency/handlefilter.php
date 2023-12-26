<head>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>


<?php
include("connection.php");

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$type = isset($_GET['Type']) ? $_GET['Type'] : 'all';
$city = isset($_GET['city']) ? $_GET['city'] : 'all';
$bedrooms = isset($_GET['bedrooms']) ? $_GET['bedrooms'] : 'Any';
$bathrooms = isset($_GET['bathrooms']) ? $_GET['bathrooms'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : 'Unlimited';

// Build the SQL query based on the search parameters
$sql = "SELECT * FROM realstate WHERE 1=1";

if (!empty($keyword)) {
    $sql .= " AND (options LIKE '%$keyword%')";
}

if ($type != 'all') {
    $sql .= " AND forwhat = '$type'";
}

if ($city != 'all') {
    $sql .= " AND location = '$city'";
}

if ($bedrooms != 'Any') {
    if ($bedrooms == '4+') {
        $sql .= " AND bedrooms >= 4";
    } else {
        $sql .= " AND bedrooms = '$bedrooms'";
    }
}

if (!empty($bathrooms)) {
    if ($bathrooms == '3+') {
        $sql .= " AND bathrooms >= 3";
    } else {
        $sql .= " AND bathrooms = '$bathrooms'";
    }
}

if ($price != 'Unlimited') {
    $sql .= " AND price >= '$price'";
}

// Execute the query
$res = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_array($res) == 0) {
    echo '<p class=no>' . 'No item was found🤥🤥' . '</p>';
    echo '<a class=yes href=property-single.php>' . 'Explore all' . '</a>';
}
// Process the results as needed
while ($row = mysqli_fetch_assoc($res)) {

?>
<div class="col-md-4">
    <div class="card-box-a card-shadow">
        <div class="img-box-a">
            <img src="../frontend/<?php echo $row["thumbnail"]; ?>" alt="" class="img-a img-fluid">
        </div>
        <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                    <h2 class="card-title-a">
                        <a href="#"><?php echo $row['title'] ?></a>
                    </h2>
                </div>
                <div class="card-body-a">
                    <div class="price-box d-flex">
                        <span class="price-a"><?php echo $row['forwhat'] ?> |
                            <?php echo $row["price"] ?></span>
                    </div>
                    <a href="property-single.php?id=<?php echo $row['id'] ?>" class="link-a">Click here
                        to view
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                        <li>
                            <h4 class="card-info-title">Area</h4>
                            <span><?php echo $row["area"] ?>
                                m<sup>2</sup>
                            </span>
                        </li>
                        <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span><?php echo $row["bedrooms"] ?></span>
                        </li>
                        <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span><?php echo $row["bathrooms"] ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<style>
.no {
    position: absolute;
    top: 50%;
    right: 50%;
    font-size: 30px;
    margin-right: -100px;
}

.yes {
    position: absolute;
    top: 59%;
    right: 53%;
    font-size: 30px;
    margin-right: -100px;
}
</style>