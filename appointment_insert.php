<?php
include("config.php");
session_start();

$donor_id = $_SESSION['user_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['DDate'];
    $time = $_POST['DTime'];
    $center = $_POST['DCenter'];
    $s_req = $_POST['DSpecial'];

    // Check if the email already exists
    $query = "SELECT * FROM appointment WHERE app_date = '$date' AND app_time = '$time' AND app_center = '$center'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        echo "<script>alert('Time Slot is not available');</script>";
        echo '<script>window.location.href = "appointment.php";</script>';
        exit();
    } else {
        // Insert the new appointment into the database
        $query = "INSERT INTO appointment (app_date, app_time, app_center, app_requirements, donor_id) 
                    VALUES ('$date', '$time', '$center', '$s_req', '$donor_id')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Appointment Booked.');</script>";
            echo '<script>window.location.href = "donorMainPage.php";</script>';
            exit();
        } else {
            echo "<script>alert('Booking failed. Please try again later.');</script>";
            echo '<script>window.location.href = "donorMainPage.php";</script>';
        }
    }
}
?>