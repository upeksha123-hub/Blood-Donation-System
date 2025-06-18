<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us - Quick Donor - Blood Donation</title>

	<link rel="stylesheet" type="text/css" href="styles/about_style.css">
	<link rel="stylesheet" type="text/css" href="styles/header_footer_style.css">
	<script src="content/js/script.js"></script>
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
        <section class="about_hero">
            <div class="about_hero_container">
                <h1>About Us</h1>
            </div>
        </section>
        <section class="aboutus">
            <div class="aboutus_container">
                <h2>Who We Are?</h2>
                <p>We at Quick Donor, we are a community-driven organization committed to saving lives through voluntary blood donations. Our mission is simple yet profound: to bridge the gap between blood donors and those in need, ensuring a steady supply of safe blood for patients in hospitals and healthcare facilities.We believe that every drop of blood donated has the power to make a difference in someone's life. With this belief at the heart of our organization, we strive to create awareness about the importance of regular blood donation and to inspire individuals to become regular blood donors.
                
                <br><br>Our team consists of dedicated professionals, volunteers, and donors who are passionate about making a positive impact on the health and well-being of others. Together, we work tirelessly to organize blood donation drives, raise awareness about blood donation, and provide support to both donors and recipients throughout the donation process.Through our collective efforts, we aim to ensure that no patient ever has to suffer due to a shortage of blood. Join us in our mission to save lives, one donation at a time.</p>
            </div>
        </section>
        <section class="ourteam">
            <div class="ourteam_container">
                <div class="ourteam_img">
                    <img src="images/chanuka/team.avif" alt="Our Team">
                    <img src="images/chanuka/team1.jpg" alt="Our Team">
                </div>
            </div>
        </section>
        <section class="mission">
            <div class="mission_container">
                <div class="left_mission">
                    <img src="images/chanuka/poster.jpg" alt="Mission Icon">
                </div>
                <div class="right_mission">
                    <h3>Our Mission</h3>
                    <p>Our mission is to save lives by connecting blood donors with those in need, ensuring a reliable and efficient supply of blood for patients worldwide. Through our user-friendly platform, we aim to foster a community of compassionate donors and empower them to make a meaningful impact on the health and well-being of others. Together, we strive to alleviate blood shortages, promote awareness about the importance of regular blood donation, and ultimately, contribute to a healthier and more resilient society.</p>
                </div>
            </div>
        </section>
        <section class="vision">
            <div class="vision_container">
                <div class="left_vision">
                    <h3>Our Vision</h3>
                    <p>Our vision is a world where every individual has access to an ample and timely supply of safe blood, enabling healthcare providers to deliver life-saving treatments without hesitation or constraint. We envision our platform as the cornerstone of a global network, uniting donors, healthcare professionals, and communities in a shared commitment to health equity and humanitarianism. Through innovation, collaboration, and advocacy, we aspire to eliminate barriers to blood donation and ensure that no patient goes without the critical care they need.</p>
                </div>
                <div class="right_vision">
                    <img src="images/chanuka/poster2.png" alt="Mission Icon">
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