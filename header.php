<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quick Donor - Blood Donation</title>
    <link rel="stylesheet" type="text/css" href="styles/header_footer_style.css">
    <script src="content/js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header">
            <div class="top-header">
                <div class="brand">
                    <a href="index.php"><img src="images/chanuka/logo1.1.1.png" alt="logo" class="brand_logo"></a>
                    <h2 class="brand_name">Quick Donor</h2>
                </div>
                
                <div class="sign">
                    <?php
                    if (isset($_SESSION['user_ID'])) {
                        echo '<a href="profile_redirect.php" class="profile-btn">Profile &nbsp<i class="fa fa-user-circle"></i></a>';
                    } else {
                        echo '<a href="login.php" class="signin-btn">Sign-in &nbsp<i class="fa fa-sign-in"></i></a>';
                        echo '<a href="register.php" class="signup-btn">Sign-up &nbsp<i class="fa fa-user-plus"></i></a>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="bottom-header">
                <nav class="navbar">
                    <div class="nav-content">
                        <a href="index.php" class="nav-item">Home</a>
                        <a href="donationCentersPage.php" class="nav-item">Centers</a>
                        <a href="donorMainPage.php" class="nav-item">Donor</a>
                        <a href="about.php" class="nav-item">About Us</a>
                        <a href="contact_us.php" class="nav-item">Contacts</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>
