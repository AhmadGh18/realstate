<?php
$id = $_GET["id"];
include("connection.php");
$sql = "select * from transaction where realstateId ='$id' and ispaid= 'yes'";
$res = mysqli_query($conn, $sql);
if (mysqli_fetch_row($res)) {
    header("location:property-single.php?id=$id&&error=someone buy it");
    exit();
}
?>

<head>
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
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card border-top border-bottom border-3" style="border-color: #51B37F !important;">
                    <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: #51B37F;">Purchase Reciept</p>

                        <div class="row">
                            <div class="col mb-3">
                                <p class="small text-muted mb-1">Date</p>
                                <p><?php echo date("j F Y"); ?></p>
                            </div>

                        </div>
                        <?php
                        $id = $_GET["id"];

                        include("connection.php");
                        $sql_price = "SELECT * FROM realstate WHERE id = '$id'";
                        $result_price = mysqli_query($conn, $sql_price);
                        $row_price = mysqli_fetch_assoc($result_price);
                        $amount = $row_price['price'];

                        ?>
                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <p><?php echo $row_price["title"] ?></p>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <p><?php echo $amount ?></p>
                                </div>
                            </div>


                        </div>

                        <div class="row my-4">
                            <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                <p class="lead fw-bold mb-0" style="color: #51B37F;"><?php echo $amount ?>$</p>
                            </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2" style="color: #51B37F;">Tracking Order</p>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="horizontal-timeline">

                                    <ul class="list-inline items d-flex justify-content-between">
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white" style="background-color: #51B37F;">
                                                Ordered</p class="py-1 px-2 rounded text-white" style="background-color: #51B37F;">
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white" style="background-color: #51B37F;">
                                                booked</p class="py-1 px-2 rounded text-white" style="background-color: #51B37F;">
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white" style="background-color: #51B37F;">
                                                On the way
                                            </p>
                                        </li>
                                        <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                            <p style="margin-right: -8px;">Recevied</p>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <form action="insurebuy.php?id=<?php echo $_GET['id']; ?>" method="post">
                                <button class="btn-primary color-a" type="submit">BUY now</button>
                            </form>

                        </div>

                        <p class="mt-4 pt-2 mb-0">Want any help? <a href="contact.php" style="color: #51B37F;">Please
                                contact
                                us</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>