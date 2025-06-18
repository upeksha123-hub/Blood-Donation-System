<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" href="styles/orders.css">
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="jjp">
        <div class="top">
            <h1>Our Orders</h1>
            <p><b>"Browse available blood products, submit orders, and track delivery status on our user-friendly Orders page.<br> Streamlined process for quick access to life-saving donations. Simple, efficient, and secure."</b></p>
        </div>
    </div>

    <div class="container">
        <form class="form" action="orders_insert.php" method="post">
            <div class="row">
                <div class="input-group">
                    <label for="dcenters">Donation Centers</label>
                    <select name="dcenters" id="donation_centers">
                        <?php
                            $query = "SELECT center_name FROM donation_center ORDER BY center_name ASC";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . htmlspecialchars($row['center_name']) . '">' . htmlspecialchars($row['center_name']) . '</option>';
                                }
                            }else {
                                echo '<option value="null"> No donation Centers </option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group">
                    <label for="blood_type">Blood Type</label>
                    <select name="blood_type" id="blood_type">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="quantity">Quantity of blood packets</label>
                    <input type="text" id="quantity" name="quantity">
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label for="phone">Receiver's Mobile Number</label>
                    <input type="text" id="phone" name="phone">
                </div>

                <div class="input-group">
                    <label for="raddress">Address</label>
                    <input type="text" id="raddress" id="raddress">
                </div>

                <button type="submit">Submit Order</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

</body>
</html>
