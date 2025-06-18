<?php
include("config.php");
session_start();

if (!isset($_SESSION['user_ID'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_ID'];


$redirect = '';

// Function to check if a user ID exists in a specific table
function check_user_id($conn, $table, $user_id) {
    $query = "SELECT * FROM $table WHERE id = '$user_id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result->num_rows > 0;
}

// Check which table contains the user ID and set the appropriate redirection
if (check_user_id($conn, 'donor', $user_id)) {
    $redirect = 'donorProfilePage.php';
} elseif (check_user_id($conn, 'medical_staff', $user_id)) {
    $redirect = 'staffMyProfilePage.php';
} elseif (check_user_id($conn, 'admin', $user_id)) {
    $redirect = 'adminProfile.php';
} elseif (check_user_id($conn, 'supplier', $user_id)) {
    $redirect = 'supplierProfile.php';
} else {
    echo "<script>
            alert('User ID not found. Please log in again.');
            window.location.href = 'login.php';
          </script>";
    exit();
}

header("Location: $redirect");
exit();
