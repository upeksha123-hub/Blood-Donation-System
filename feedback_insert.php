<?php
include("config.php");
session_start();

$donor_id = $_SESSION['user_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $center = $_POST['DCenter'];
    $comment = $_POST['DComment'];

    // Insert the new appointment into the database
    $query = "INSERT INTO feedback (feed_center, feed_comment, donor_id) 
                VALUES ('$center', '$comment', '$donor_id')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Submit Successful.');</script>";
        echo '<script>window.location.href = "donorMainPage.php";</script>';
        exit();
    } else {
        echo "<script>alert('Submission failed. Please try again later.');</script>";
        echo '<script>window.location.href = "donorMainPage.php";</script>';
    }
}
?>