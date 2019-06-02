<?php

session_start();
if ($_SESSION['status'] != "ACTIVE") {
    header("Location: homepage.php");
}

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "proje");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['hid_demand']) && isset($_POST['bbid_demand']) && isset($_POST['blood_demand'])) {

    $hid_demand = $_POST['hid_demand'];
    $bbid_demand = $_POST['bbid_demand'];
    $blood_demand = $_POST['blood_demand'];

    $sql = "INSERT INTO demands (bbid, hid, blood) VALUES ('$bbid_demand', '$hid_demand', '$blood_demand');";
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Demand Successfully Made to Blood Bank.')</script>";
    } else {
        echo "<script>alert('Failed to Make a Demand.')</script>";
    }
}

echo "<script>location.assign('hospitalTable.php')</script>";