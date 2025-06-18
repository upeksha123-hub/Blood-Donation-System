<?php
include("config.php");
session_start();

// Redirect if user is not logged in
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
    <title>  Quick Donor</title>
    <link rel="stylesheet" href="styles/feedback.css">
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="bodyimg">
    <fieldset>
        <form id="insert" action="feedback_insert.php" method="POST">
            <legend><b>Feedback of Our Services</b></legend><br><br>

            <label for="DCenter">Donation center</label><br>
            <select name="DCenter" class="doncenter" type="center">
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
            </select><br>
            <br>
            <br>
            <label for="DComment">Comment</label><br>
            <textarea name="DComment" rows="10" cols="80" placeholder="Type here..."></textarea><br/>
             <br>
             <br>
            <input type="reset" value="Clear">
            <input type="submit" onclick="submitfeedback()"   value="Submit">

        </form>
    </fieldset>
</div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

    <script src="js/feedback.js"></script>
</body>
</html>