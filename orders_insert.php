<?php
include("config.php");
session_start();

$supplier_id = $_SESSION['user_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $center = $_POST['dcenters'];
    $blood_type = $_POST['blood_type'];
    $quantity = $_POST['quantity'];
    $r_phone = $_POST['phone'];
    $r_address = $_POST['raddress'];

    
    $query = "INSERT INTO orders (center, blood_type, quantity, r_phone, r_address, supplier_id) 
                VALUES ('$center', '$blood_type', '$quantity', '$r_phone', '$r_address', '$supplier_id')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order Booked.');</script>";
        echo '<script>window.location.href = "supplierProfile.php";</script>';
        exit();
    } else {
        echo "<script>alert('Booking failed. Please try again later.');</script>";
        echo '<script>window.location.href = "supplierProfile.php";</script>';
    }
}

?>