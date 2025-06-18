<?php
include("config.php");
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_ID'])) {
    header('Location: login.php');
    exit();
}

$user_ID = $_SESSION['user_ID'];

// Delete the user from the database
$delete_query = "DELETE FROM donor WHERE id = '$user_ID'";

if ($conn->query($delete_query)) {
    session_destroy();
    echo "<script>alert('Deleted successfully.'); window.location.href = 'login.php';</script>";

    exit();

} else {
    echo "<script>alert('Failed to delete. Please try again.');  window.location.href = 'donorProfilePage.php';</script>";

    exit();
}