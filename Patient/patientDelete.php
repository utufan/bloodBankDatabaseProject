<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "proje");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['pid_delete'])) {

    $pid_delete = $_POST['pid_delete'];

    $sql3 = "DELETE FROM patient_receive WHERE patient_receive.pid = $pid_delete;"; 
    $sql2 = "DELETE FROM patient_receive2 WHERE patient_receive2.pid = $pid_delete;"; 
    $sql1 = "DELETE FROM patient_receive3 WHERE patient_receive3.pid = $pid_delete;";
    if (mysqli_query($link, $sql1) && mysqli_query($link, $sql2) && mysqli_query($link, $sql3)) {
        echo "<script>alert('Patient Successfully Deleted.')</script>";
    } else {
        echo "<script>alert('Failed to Delete.')</script>";
    }
}

echo "<script>location.assign('patientTable.php')</script>";
