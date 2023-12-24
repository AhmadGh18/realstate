<?php
include("connection.php");
$id = $_GET["id"];
$sql = "delete from images where id = $id";
$res = mysqli_query($conn, $sql);
header("location: editreal.php?id=" . $_GET['realid']);
