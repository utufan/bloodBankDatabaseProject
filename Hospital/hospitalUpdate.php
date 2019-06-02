<?php

session_start();
if ($_SESSION['status'] != "Active") {
    header("Location: homepage.php");
}

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "proje");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['hid_update']) && isset($_POST['hname_update']) && isset($_POST['haddress_update']) && isset($_POST['hpno_update'])) {

    $hid_update = $_POST['hid_update'];
    $hname_update = $_POST['hname_update'];
    $haddress_update = $_POST['haddress_update'];
    $hpno_update = $_POST['hpno_update'];

    $sql = "UPDATE hospital SET haddress = '$haddress_update', hname = '$hname_update', hpno = '$hpno_update' WHERE hid = '$hid_update';";
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Hospital Table Successfully Updated.')</script>";
    } else {
        echo "<script>alert('Failed to Update.')</script>";
    }
}

echo "<script>location.assign('hospitalTable.php')</script>";
