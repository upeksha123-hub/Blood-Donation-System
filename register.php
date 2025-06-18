<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up - Quick Donor - Blood Donation</title>

	<link rel="stylesheet" type="text/css" href="styles/signup_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
         <?php
            include "header.php";
        ?>
    </header>
    <main>
        <section class="signup_hero">
            <div class="signup_hero_container">
                <h1>Registration</h1>
            </div>
        </section>
        <section class="signup_form">
            <div class="signup_container">
                <h2>Register as a Donor</h2>
                <div class="signup_content">
                    
                    <form action="register_donor.php" method="post">
                        <div class="signup_row">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" class="form-item" placeholder="John">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" class="form-item" placeholder="Perera">
                            </div>
                        </div>
                        <div class="signup_row">
                            <div class="form-group">
                                <label for="gender">Gender</label><br>
                                <div class="form-radio">
                                    <div class="radio">
                                        <input type="radio" name="gender" class="form-item-radio" value="male" > Male
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="gender" class="form-item-radio" value="female" > Female
                                    </div>
                                </div>
                                </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" class="form-item">
                            </div>
                        </div>
                        <div class="signup_row">
                            <div class="form-group">
                                <label for="weight">Weight (Kg)</label>
                                <input type="text" name="weight" class="form-item" placeholder="60kg">
                            </div>
                            <div class="form-group">
                                <label for="bloodgrp">Blood Group</label>
                                <select name="bloodgrp" class="form-item-select">
                                    <option value=""  selected disabled>Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-" >A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="signup_row">
                            <div class="form-group">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" name="phonenumber" class="form-item" placeholder="+94 7x xxx xxxx">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-item" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="signup_row">
                            <div class="form-group_single">
                                <label for="address">Address</label>
                                <textarea name="address" placeholder="Colombo, Sri Lanka" class="form-item-textarea"></textarea>
                            </div>
                        </div>
                        <div class="signup_row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-item">
                            </div>
                            <div class="form-group">
                                <label for="re-password">Re-enter Password</label>
                                <input type="password" name="re_password" class="form-item">
                            </div>
                        </div>
                        <div class="signup_row btn">
                            <input type="reset" class="signup-form-btn">
                            <input type="submit" name="submit" class="signup-form-btn">
                        </div>
                        <p class="signup_form_signin">Already have an account? <a href="login.php" class="signup_form_signin_link">Sign-in</a></p>
                        
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php
            include "footer.php";
        ?>
	</footer>
</body>
</html>