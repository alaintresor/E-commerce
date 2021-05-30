<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
include "connection.php";

$id = $_GET['id'];

$query = "DELETE FROM `products` WHERE `id`='$id'";

$isDone = mysqli_query($connect, "$query");

if ($isDone) {
    echo "<script>window.open('view_products.php','_self');</script>";
}
