<?php
include("config.php");
session_start();

if (!isset($_SESSION['user_ID'])) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quick Donor</title>
    <link rel="stylesheet" href="styles/appoinment.css">
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="bodyimg">
    <fieldset>
        <form id="myForm" action="appointment_insert.php" method="POST">
            <legend><b>Getting an Appointment</b></legend><br>
            <hr>

            <label for="DDate">Donation Date</label><br/>
            <input name="DDate" type="date" required><br>
            <br>
            <br>
           
            <label for="DTime">Donation time</label><br>
            <select  name="DTime" type="time">
                <option value="09.00 AM">09.00 AM</option>
                <option value="11.00 AM">11.00 AM</option>
                <option value="01.00 PM">01.00 PM</option>
                <option value="03.00 AM">03.00 AM</option>
            </select><br><br><br>

            <label for="DCenter">Donation center</label><br>
            <select name="DCenter" type="center">
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
            </select><br<br><br>
            <br>
            <br>

            <label for="DSpecial">Special Requirments</label><br>
            <textarea name="DSpecial" rows="4" cols="50"></textarea><br><br>

            <input type="checkbox" class="inputstyle" id="ckeckbox" onclick="enableButton()"> Accept privacy<br/><br>
            
            <input type="reset" value="Reset">
            <input type="submit" onclick="submitform()" value="Submit">
        </form>
    </fieldset>
    </div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

</body>
</html>