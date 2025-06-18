<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quick Donor - Blood Donation</title>

	<link rel="stylesheet" type="text/css" href="styles/home_style.css">
	<link rel="stylesheet" type="text/css" href="styles/header_footer_style.css">
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
        <section class="hero">
            <div class="hero_container">
                <div class="left-container">
                    <h2>Let's <span>Save</span><br>Lives Together</h2>
                    <p>Join us in our mission to save lives through blood donation. Your contribution can make a life-changing impact. Find a donation center near you and be a part of this lifesaving journey today.</p>
                    <a href="register.php" class="hero-btn">Become a Donor <i class="fa fa-heartbeat"></i></a>
                </div>
                <div class="right-container">
                    <img src="images/chanuka/logo1.1.png" alt="blood drop">
                </div>
            </div>
        </section>
        <section class="mission">
            <div class="mission_container">
                <h3>Our Mission</h3>
                <p>Empowering communities through the gift of life. Our mission is to ensure a stable and sustainable blood supply to meet the needs of patients in critical conditions. Through advocacy, education, and fostering a culture of regular donation, we aim to save lives and improve health outcomes. Together, we strive to make blood donation a societal norm, empowering individuals to contribute to the well-being of others and create a healthier, more resilient world.</p>
            </div>   
        </section>
        <section class="collaborate">
            <div class="collaborate_container">
                <h2>Our Collaborators</h2>
                <div class="collaborate_img">
                    <img src="images/chanuka/hospital_logo (1).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (2).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (3).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (4).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (5).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (6).png" alt="hospital_logo">
                    <img src="images/chanuka/hospital_logo (7).png" alt="hospital_logo">
                </div>
            </div>
        </section>
        <section class="info">
            <div class="info_container">
                <div class="info_left">
                    <h3>How to donate blood?</h3>
                    <p>To donate blood, individuals typically begin by finding a nearby blood donation center or mobile blood drive. Upon arrival, they will be asked to fill out a questionnaire about their medical history and recent travel. Afterward, a healthcare professional will conduct a brief physical examination to ensure the donor is in good health. Once cleared, the donor will proceed to the donation area where a small needle will be inserted into a vein, usually in the arm. The donation process itself typically takes around 10-15 minutes, during which the donor sits comfortably while the blood is collected. Afterward, donors are often encouraged to rest for a short period and enjoy refreshments before leaving.</p>
                </div>
                <div class="info_right">
                    <h3>Who can donate blood?</h3>
                    <p>Not everyone is eligible to donate blood due to certain health and lifestyle factors. Generally, donors must be in good overall health, at least 17 years old (in most places), and meet weight requirements. Additionally, individuals with certain medical conditions or who are taking specific medications may be ineligible to donate. Factors such as recent travel to certain countries or exposure to infectious diseases may also affect eligibility. It's essential for potential donors to consult with their local blood donation center or health professionals to determine if they meet the criteria for blood donation.</p>
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