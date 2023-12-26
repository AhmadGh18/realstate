<?php
// session_start();
// if (!isset($_SESSION['user_id'])) {
//   header("location:login.php");
// }
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
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form method="post">
              <select class="custom-select" name="sort_option" onchange="this.form.submit()">
                <option value="all" <?php if (!isset($_POST['sort_option']) || $_POST['sort_option'] == 'all') echo 'selected'; ?>>
                  All</option>
                <option value="new_to_old" <?php if (isset($_POST['sort_option']) && $_POST['sort_option'] == 'new_to_old') echo 'selected'; ?>>
                  New to Old</option>
                <option value="for_rent" <?php if (isset($_POST['sort_option']) && $_POST['sort_option'] == 'for_rent') echo 'selected'; ?>>
                  For Rent</option>
                <option value="for_sale" <?php if (isset($_POST['sort_option']) && $_POST['sort_option'] == 'for_sale') echo 'selected'; ?>>
                  For Sale</option>
              </select>
            </form>
          </div>
        </div>

        <?php
        $sql = "SELECT * FROM realstate";

        // Check if a sorting option is selected
        if (isset($_POST['sort_option'])) {
          switch ($_POST['sort_option']) {
            case 'new_to_old':
              $sql .= " ORDER BY date_posted DESC";
              break;
            case 'for_rent':
              $sql .= " WHERE forwhat = 'rent'";
              break;
            case 'for_sale':
              $sql .= " WHERE forwhat = 'sale'";
              break;
            default:
              // Do nothing for 'all' option
              break;
          }
        }

        include("connection.php");
        $res = mysqli_query($conn, $sql);

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
                    <h2 class="sold">
                      <?php echo $row["status"] != "available" ? "SOLD !" : "" ?>
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
      </div>
    </div>
  </section>

  <!--/ Property Grid End /-->
  <style>
    .sold {
      color: red;
      background-color: white;
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