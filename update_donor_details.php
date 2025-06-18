<?php
include("config.php");
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_ID'])) {
    header('Location: login.php');
    exit();
}

$user_ID = $_SESSION['user_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dob =$_POST["date-of-birth"];
    $weight=$_POST["weight"];
    $bg=$_POST["blood-group"];
    $phone=$_POST["phone-number"];
    $address=$_POST["address"];

    $update_query = "UPDATE donor SET fname = '$fname', lname = '$lname', dob = '$dob', phone = '$phone', weight = '$weight', address = '$address', blood_type = '$bg' WHERE id = '$user_ID'";
    
    if ($conn->query($update_query)) {
        echo "<script>alert('Updated successfully.'); window.location.href = 'donorProfilePage.php';</script>";
    } else {
        echo "<script>alert('Failed to update. Please try again.'); window.location.href = 'donorProfilePage.php';</script>";
    }

    exit();    
}

?>