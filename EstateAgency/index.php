<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EstateAgency Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" action="handlefilter.php" method="get">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="keyword">Keyword</label>
                            <input name="keyword" type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <select required name="Type" class="form-control form-control-lg form-control-a" id="Type">
                                <option value="all">All Type</option>
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select required name="city" class="form-control form-control-lg form-control-a" id="city">
                                <option value="all">All City</option>
                                <?php
                                include("connection.php");
                                $sql = "SELECT DISTINCT location FROM realstate";
                                $res = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo '<option value="' . $row['location'] . '">' . $row['location'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Bedrooms</label>
                            <select required name="bedrooms" class="form-control form-control-lg form-control-a"
                                id="bedrooms">
                                <option value="Any">Any</option>
                                <option value="1">01</option>
                                <option value="3">02</option>
                                <option value="4+">3+</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms</label>
                            <select required name="bathrooms" class="form-control form-control-lg form-control-a"
                                id="bathrooms">
                                <option value="">Any</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3+">03+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="price">Min Price</label>
                            <select required name="price" class="form-control form-control-lg form-control-a"
                                id="price">
                                <option value="Unlimited">Unlimited</option>
                                <option value="50000">$50,000</option>
                                <option value="100000">$100,000</option>
                                <option value="150000">$150,000</option>
                                <option value="20000">$200,000+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.php">Estate<span class="color-b">Agency</span></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="property-grid.php">Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mysaved.php">My saved</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Mount
                                            <br> Olive Road Two
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Rino
                                            <br> Venda Road Five
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Doral, Florida
                                            <br> 78345
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Alira
                                            <br> Roan Road One
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-gamepad"></span>
                            </div>

                        </div>
                        <div class="card-body-c">

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Loans</h2>
                            </div>
                        </div>
                        <div class="card-body-c">

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Buy</h2>
                            </div>
                        </div>
                        <div class="card-body-c">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Services End /-->

    <!--/ Property Star /-->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.php">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                <?php
                $sql = "SELECT * FROM realstate ORDER BY date_posted LIMIT 5";
                include("connection.php");
                $res = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($res)) {
                    echo '<div class="carousel-item-b">';
                    echo '<div class="card-box-a card-shadow">';
                    echo '<div class="img-box-a">';
                    echo '<img src="../frontend/' . $row["thumbnail"] . '" alt="" class="img-a img-fluid">';
                    echo '</div>';
                    echo '<div class="card-overlay">';
                    echo '<div class="card-overlay-a-content">';
                    echo '<div class="card-header-a">';
                    echo '<h2 class="card-title-a">';
                    echo '<a href="property-single.php">' . $row["location"] . '</a>';
                    echo '</h2>';
                    echo '</div>';
                    echo '<div class="card-body-a">';
                    echo '<div class="price-box d-flex">';
                    echo '<span class="price-a">' . $row["forwhat"] . ' | $' . $row["price"] . '</span>';
                    echo '</div>';
                    echo '<a href="property-single.php?id=' . $row["id"] . '" class="link-a">Click here to view';
                    echo '<span class="ion-ios-arrow-forward"></span>';
                    echo '</a>';
                    echo '</div>';
                    echo '<div class="card-footer-a">';
                    echo '<ul class="card-info d-flex justify-content-around">';
                    echo '<li>';
                    echo '<h4 class="card-info-title">Area</h4>';
                    echo '<span>' . $row["area"] . '<sup>2</sup></span>';
                    echo '</li>';
                    echo '<li>';
                    echo '<h4 class="card-info-title">Beds</h4>';
                    echo '<span>' . $row["bedrooms"] . '</span>';
                    echo '</li>';
                    echo '<li>';
                    echo '<h4 class="card-info-title">Baths</h4>';
                    echo '<span>' . $row["bathrooms"] . '</span>';
                    echo '</li>';
                    echo '<li>';
                    echo '<h4 class="card-info-title">Kitchen</h4>';
                    echo '<span>' . $row["kitchens"] . '</span>';
                    echo '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!--/ Property End /-->

    <!--/ Agents Star /-->
    <section class="section-agents section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Team</h2>
                        </div>
                        <div class="title-link">
                            <a href="agents-grid.php">All employee
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
            .prf {
                height: 500px;
                width: 600px;
                /* Adjust the height as needed */
                object-fit: cover;
            }
            </style>
            <div class="row">
                <?php
                // Assuming you have a database connection established
                include("connection.php");

                // Query to retrieve user information from the database
                $sql = "SELECT * FROM users limit 3";
                $result = mysqli_query($conn, $sql);

                // Check if there are rows in the result
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Extract user information from the current row
                        $firstName = $row['first_name'];
                        $lastName = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $role = $row['role'];

                        echo ' <div class="col-md-4">';
                        echo '<div class="card-box-d">';
                        echo '<div class="card-img-d">';
                        echo '<img src="../frontend/' . $row["profile_pic_url"] . '" alt="" class="img-d img-fluid prf">';
                        echo '</div>';
                        echo '<div class="card-overlay card-overlay-hover">';
                        echo '<div class="card-header-d">';
                        echo '<div class="card-title-d align-self-center">';
                        echo '<h3 class="title-d">';
                        echo '<a href="agent-single.php" class="link-two">' . $firstName . ' ' . $lastName . '</a>';
                        echo '</h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="card-body-d">';
                        echo '<p class="content-d color-text-a" style="font-size: 18px;">';
                        echo "He/she is our " . $row["role"];
                        echo '</p>';

                        echo '<div class="info-agents color-a">';
                        echo '<p>';
                        echo '<strong>Phone: </strong>' . $phone;
                        echo '</p>';
                        echo '<p>';
                        echo '<strong>Email: </strong>' . $email;
                        echo '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="card-footer-d">';
                        echo '<div class="socials-footer d-flex justify-content-center">';
                        echo '<ul class="list-inline">';
                        // Social media links are omitted
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No users found in the database.";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>

        </div>
        </div>
    </section>
    <!--/ Agents End /-->

    <!--/ News Star /-->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Chepeast!</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.php">All
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="new-carousel" class="owl-carousel owl-theme">
                <?php
                $sql = "SELECT * FROM realstate ORDER BY price LIMIT 5";
                include("connection.php");
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="../frontend/<?= $row['thumbnail']; ?>" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-category-b">
                                <a href="#" class="price"><?php echo $row["price"] . "$" ?></a>
                            </div>
                            <div class="card-header-b">

                                <div class="card-category-b">
                                    <a href="#" class="category-b"><?php echo $row["PropertyType"] ?></a>
                                </div>

                                <div class="card-date">
                                    <span class="date-b"><?php echo $row["date_posted"] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <style>
            .price {
                background-color: white;
                margin: 10px;
                font-size: 23px;
            }
            </style>
        </div>
    </section>
    <!--/ News End /-->

    <!--/ Testimonials Star /-->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Some reviews</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM reviews where subject = 'review' ";
                            $res = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($res)) {
                                echo '<div class="col-sm-12 col-md-6">';
                                echo '  <div class="testimonial-box">';
                                echo '      <div class="testimonial-img">';
                                echo '          <span class="name">' . $row['Full_name'] . '</span>';
                                echo '          <p class="message">' . $row['Message'] . '</p>';
                                echo '      </div>';
                                echo '  </div>';
                                echo '</div>';
                            }
                            ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Testimonials End /-->
    <style>
    .testimonial-box {
        background-color: #f9f9f9;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .testimonial-img {
        font-size: 16px;
        color: #333;
    }

    .testimonial-img .name {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
        color: #007bff;
        /* Blue color for the name */
    }

    .testimonial-img .message {
        font-style: italic;
        line-height: 1.4;
    }
    </style>

    <!--/ footer Star /-->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">EstateAgency</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                <?php
                                include("connection.php");
                                $sql = "select * from company limit 1";
                                $res = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($res);
                                echo $data["bio"];
                                ?>

                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <?php
                                    include("connection.php");
                                    $sql = "select * from company limit 1";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_assoc($res);
                                    ?>
                                    <span class="color-text-a">Phone .</span> <?php echo $data["phone_Number"] ?>
                                </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email </span> <?php echo $data["Email"] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">We are located in</h3>
                        </div>
                        <div class="w-body-a">

                            <ul class="list-unstyled">
                                <?php
                                include("connection.php");

                                $sql = "SELECT * FROM locations";
                                $res = mysqli_query($conn, $sql);

                                while ($data = mysqli_fetch_assoc($res)) {
                                    echo '<li class="item-list-a">';
                                    echo '<i class="fa fa-angle-right"></i> <a href="#">' . $data['name'] . '</a>';
                                    echo '</li>';
                                }
                                ?>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="index.php">Home</a>
                            </li>

                            <li class="list-inline-item">
                                <a href="mysaved.php">My Property</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="property-grid.php">All estate</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">EstateAgency</span> All Rights Reserved.
                        </p>
                    </div>
                    <div class="credits">
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>