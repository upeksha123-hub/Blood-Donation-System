<?php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['re_password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['address'];
    $blood_type = $_POST['bloodgrp'];
    $weight = $_POST['weight'];

    // Validate inputs
    if (empty($fname) || empty($lname) || empty($gender) || empty($email) || empty($password) || empty($confirm_password) ||
        empty($dob) || empty($phone) || empty($address) || empty($blood_type) || empty($weight)) {
        echo "<script>alert('All fields are required.');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.');</script>";
        echo '<script>window.location.href = "register.php";</script>';
    } else {
        // Check if the email already exists
        $query = "SELECT * FROM donor WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            echo "<script>alert('An account with this email already exists.');</script>";
            echo '<script>window.location.href = "register.php";</script>';

        } else {
            // Insert the new donor into the database
            $query = "INSERT INTO donor (fname, lname, gender, email, password, dob, phone, address, blood_type, weight) 
                      VALUES ('$fname', '$lname', '$gender', '$email', '$password', '$dob', '$phone', '$address', '$blood_type', '$weight')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registration successful.');</script>";
                echo '<script>window.location.href = "login.php";</script>'; // Redirect to login
                exit(); // Ensure no further code is executed
            } else {
                echo "<script>alert('Registration failed. Please try again later.');</script>";
                echo '<script>window.location.href = "register.php";</script>';
            }
        }
    }
}
