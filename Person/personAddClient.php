<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "proje");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['ssn']) && isset($_POST['name'])&& isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['phno'])  && isset($_POST['paddress'])) {

    $ssn = $_POST['ssn'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $paddress = $_POST['paddress'];
    $phno = $_POST['phno'];

    $sql = "INSERT INTO person (ssn, name, phno, age, sex, paddress ) VALUES ('$ssn', '$name', '$phno', '$age', '$sex', '$paddress');";
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Successfully Registered to Database. THANK YOU FOR YOUR SUPPORT!')</script>";
    } else {
        echo "<script>alert('Oops Something Went Wrong. Please Try Again to Register. Redirecting to Homepage...')</script>";
    }
}

//header("Location: homepage.php");
echo "<script>location.assign('information_page.php')</script>";