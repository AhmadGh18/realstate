<?php
$id = $_GET["id"];
include("connection.php");
$sql = "delete from locations where id=" . $id;
$res = mysqli_query($conn, $sql);
header("location:index.php");
