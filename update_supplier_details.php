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

    $name = $_POST['Cname'];
    $nic = $_POST['Cnic'];
    $phone_no = $_POST['CNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    $update_query = "UPDATE supplier SET name = '$name', nic = '$nic', phone = '$phone_no', email = '$email', address = '$address', age = '$age' WHERE id = '$user_ID'";
    
    if ($conn->query($update_query)) {
        echo "<script>alert('Updated successfully.'); window.location.href = 'supplierProfile.php';</script>";
    } else {
        echo "<script>alert('Failed to update. Please try again.'); window.location.href = 'supplierProfile.php';</script>";
    }

    exit();
}

?>