<?php
$id = $_GET["id"];
include("connection.php");
$sql = "select * from transaction where realstateId ='$id' and ispaid= 'yes'";
$res = mysqli_query($conn, $sql);
if (mysqli_fetch_row($res)) {
    header("location:property-single.php?id=$id&&error=someone buy it");
    exit();
}
$sql="Insert into transaction"
