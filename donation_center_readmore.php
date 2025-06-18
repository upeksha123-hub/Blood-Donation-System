<?php
include("config.php");
session_start();

if (isset($_GET['id'])) {
    $center_id = $_GET['id'];
} else {
    header('Location: donationCentersPage.php');
    exit();
}

// Fetch the donation center details from the database
$query = "SELECT * FROM donation_center WHERE center_id = $center_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $center = mysqli_fetch_assoc($result);
} else {
    header('Location: donationCentersPage.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Center Details</title>
    <link rel="stylesheet" href="styles/donationCentersStyles.css">

    <style>
        p {margin-top: 5px;}
        h3 {margin: 20px 0;}
    </style>
    
</head>
<body>
    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="outerbg"><div class="outershadow">
    
    <h1>Donation Center: <?php echo htmlspecialchars($center['center_name']); ?></h1>

    <div class="container_dc">
        <div class="box">
            <div class="image" style="height: 600px;">
                <img src="<?php echo htmlspecialchars($center['center_picture']); ?>" alt="Donation Center Image">
            </div>
            <div class="content">
                <h3><?php echo htmlspecialchars($center['center_name']); ?></h3>
                <p><b>Location: </b><?php echo htmlspecialchars($center['center_location']); ?></p>
                <p><b>Phone: </b><?php echo htmlspecialchars($center['center_phone']); ?></p>
                <p><b>Email: </b><?php echo htmlspecialchars($center['center_email']); ?></p>
                <p><b>Operating Hours: </b><?php echo htmlspecialchars($center['center_ophours']); ?></p>
                <button class="viewmorebtn" onclick="window.location.href='donationCentersPage.php'">Back to Donation Centers Page </button>
            </div>
        </div>
    </div>

    </div></div>


    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

    <script src="js/donationCentersJs.js"></script>
</body>
</html>
