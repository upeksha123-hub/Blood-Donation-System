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

    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $update_query = "UPDATE medical_staff SET ms_name = '$name', ms_nic = '$nic', ms_phone = '$phone_no', email = '$email', ms_address = '$address' WHERE id = '$user_ID'";
    
    if ($conn->query($update_query)) {
        echo "<script>alert('Updated successfully.'); window.location.href = 'staffMyProfilePage.php';</script>";
    } else {
        echo "<script>alert('Failed to update. Please try again.'); window.location.href = 'staffMyProfilePage.php';</script>";
    }

    exit();    
}

?>