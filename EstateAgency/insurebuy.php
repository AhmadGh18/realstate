 <?php
    session_start();
    if (!isset($_SESSION["user_id"])) {
        header("location: login.php");
        exit();
    }

    include("connection.php");

    $id = $_GET["id"];

    // Update the status of the real estate to 'Not available'
    $sql = "UPDATE realstate SET status = 'Not available' WHERE id = '$id'";
    mysqli_query($conn, $sql);

    // Fetch the price of the real estate
    $sql_price = "SELECT price FROM realstate WHERE id = '$id'";
    $result_price = mysqli_query($conn, $sql_price);
    $row_price = mysqli_fetch_assoc($result_price);
    $amount = $row_price['price'];

    // Get the current user's ID from the session
    $client_id = $_SESSION["user_id"];

    // Insert into the transaction table
    $sql_transaction = "INSERT INTO transaction (clientid, realstateid, ispaid, amount, date_of_transaction) 
    VALUES ('$client_id', '$id', 'yes', '" . ($amount + 1000) . "', NOW())";

    mysqli_query($conn, $sql_transaction);

    // Redirect or perform additional actions as needed
    header("location: index.php");
