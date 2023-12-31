<?php
if (!isset($_GET["id"])) {
  header("location:index.php");
  exit();
}
?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- Include Font Awesome library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
  <?php
  $id = $_GET['id'];
  include("connection.php");
  $sql = "SELECT * FROM realstate WHERE id = '$id'";
  $data = mysqli_query($conn, $sql);
  $res = mysqli_fetch_assoc($data);

  ?>

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
              <input name="keyword" type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
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
              <select required name="bedrooms" class="form-control form-control-lg form-control-a" id="bedrooms">
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
              <select required name="bathrooms" class="form-control form-control-lg form-control-a" id="bathrooms">
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
              <select required name="price" class="form-control form-control-lg form-control-a" id="price">
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
  <!-- Assuming you have a real estate post with a unique identifier $postId -->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Estate<span class="color-b">Agency</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
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
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <?php
  if (isset($_GET["error"])) {
    echo '<p class="alert-danger">' . $_GET["error"] . '</p>';
  }

  ?>
  <!--/ Nav End /-->
  <style>
    .fa-bookmark {
      font-size: 40px;
      /* Adjust the size as needed */
      color: red;
      /* Change the color of the heart icon */
      background-color: transparent;
      /* Set the background color to transparent */
      z-index: 0;
    }
  </style>

  <!--/ Intro Single star /-->
  <section class="intro-single">

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"> <?php echo $res['title'] ?>
            </h1>
            <span class="color-text-a"> <?php echo $res['location'] ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.php">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $res['title'] ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php
          include("connection.php");

          // Get the id from the URL parameter
          $id = $_GET['id'];

          // Fetch thumbnail from the Realstate table
          $sql = "SELECT thumbnail from realstate WHERE id = $id";
          $res2 = mysqli_query($conn, $sql);

          // Check if there is a row in the result
          if ($row = mysqli_fetch_assoc($res2)) {
            echo '<div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">';
            echo '<div class="carousel-item-b">';
            echo '<img src="../frontend/' . $row["thumbnail"] . '" alt="">';
            echo '</div>';

            // Fetch and display all related images
            $imgRes = mysqli_query($conn, "SELECT imgurl FROM images WHERE realstate_id = $id");
            while ($imgRow = mysqli_fetch_assoc($imgRes)) {
              echo '<div class="carousel-item-b">';
              echo '<img src="../frontend/' . $imgRow["imgurl"] . '" alt="">';
              echo '</div>';
            }

            echo '</div>';
          } else {
            echo "No data found for the given id.";
          }

          // Close the database connection
          mysqli_close($conn);
          ?>





        </div>
        <div class="row justify-content-between">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-center foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="ion-money">$</span>
                </div>
                <div class="card-title-c align-self-center">
                  <h5 class="title-c"><?php echo $res["price"] ?></h5>
                </div>
              </div>
            </div>
            <div class="property-summary">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Quick Summary</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Property ID:</strong>
                    <span><?php echo $res['id'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Location:</strong>
                    <span><?php echo $res['location'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Property:</strong>
                    <span><?php echo $res['PropertyType'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Status:</strong>
                    <span><?php echo $res['status'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Area:</strong>
                    <span><?php echo $res['area'] ?><sup>2</sup>
                    </span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Beds:</strong>
                    <span><?php echo $res['bedrooms'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Baths:</strong>
                    <span><?php echo $res['bathrooms'] ?></span>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-7 col-lg-7 section-md-t3">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Property Description</h3>
                </div>
              </div>
            </div>

            <div class="property-description">
              <p class="description color-text-a">
                <?php echo $res['description'] ?>
              </p>

            </div>
            <div class="col-12">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="color-text-a">
                <ul class="ulstyle">
                  <?php

                  $options = explode(',', $res['options']);

                  foreach ($options as $option) {
                    $option = trim($option);
                    echo " -<li class='list-item'>$option</li>";
                  }

                  ?>
                </ul>
              </div>
              <form action="handlesave.php" method="get">
                <?php
                // Check if the "error" parameter is set in the URL
                if (isset($_GET['error'])) {
                  echo '<p class="alert">' . $_GET['error'] . '</p>';
                }
                ?>

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <!-- Other form elements go here -->
                <button type="submit">Save</button>
              </form>
              <?php
              if (isset($_GET["error"])) {
                echo '<p class="alert-danger">' . $_GET["error"] . '</p>';
              }

              ?>
              <div class="addd">
                <a class="buy" href="buy.php?id=<?php echo $_GET['id']; ?>">Buy instantly</a>
              </div>


            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
    <style>
      .addd {
        margin-top: 40px;
      }

      .buy {
        border-radius: 20px;
        padding: 10px;
        margin: 60px 0;
        ;
        background-color: #DFF7E8;
      }
    </style>
  </section>
  <!--/ Property Single End /-->

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
  <div id="preloader"></div>
  <style>
    .list-item {
      /* Add your styles here */
      margin-bottom: 8px;
      font-size: 14px;
      margin-right: 10px;
      color: #333;
      display: inline;
      /* Add any other styles you need */
    }

    .ulstyle {
      list-style: none;
    }
  </style>
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