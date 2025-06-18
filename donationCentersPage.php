<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Donor | Donation Centers</title>
    <link rel="stylesheet" href="styles/donationCentersStyles.css">
</head>
<body>
    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="outerbg"><div class="outershadow">

    <h1>Donation Centers</h1>

    <div class="container_dc">
        <?php

        // Query to get the donation center data from the database
        $query = "SELECT center_id, center_name, center_location, center_picture FROM donation_center ORDER BY center_name ASC";
        $result = $conn->query($query);

        $index = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                // Determine if the box should be hidden
                if ($index >= 3) {
                    $hidden_class = 'hidden';
                } else {
                    $hidden_class = '';
                }

                echo '<div class="box ' . $hidden_class . '">';
                echo '  <div class="image" style="height: 230px;">';
                echo '      <img src="' . htmlspecialchars($row['center_picture']) . '" alt="Donation Center Image">';
                echo '  </div>';
                echo '  <div class="content">';
                echo '      <h3>' . htmlspecialchars($row['center_name']) . '</h3>';
                echo '      <p>' . htmlspecialchars($row['center_location']) . '</p>';
                echo '      <a href="donation_center_readmore.php?id=' . $row['center_id'] . '"><button class="btn">Read More</button></a>';
                echo '  </div>';
                echo '</div>';

                $index++;
            }
        }else {
            echo '<h1>No donation centers found.</h1>';
        }
        ?>
        
        <div class="emptydiv"></div>       
        <div>
            <?php
                if ($index > 3) {
                    echo '<button id="viewmorebtn" class="viewmorebtn" onclick="loadMore()" style="text-align:center"> View More </button>';
                }
            ?>
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