<?php
include("config.php");
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_ID'])) {
    header('Location: login.php');
    exit();
}

$user_ID = $_SESSION['user_ID'];

// Fetch user data from the database
$query = "SELECT * FROM donor WHERE id = '$user_ID'";
$result = mysqli_query($conn, $query);

if ($result->num_rows === 0) {
    header('Location: login.php');
    exit();
}

$donor = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROFILE PAGE</title>
  <link rel="stylesheet" href="styles/donorProfilePage.css">
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>
    <br>
    <div class="donor-profile">
	    <h1><b><center>Donor Profile</center><b></h1>
      <br><hr><br>
        <img src="<?php echo htmlspecialchars($donor['profile_picture']); ?>" alt="profile image"/>
        <form action="upload_image_donor.php" method="post" enctype="multipart/form-data">
            Choose new image:
            <input type="file" accept=".png, .jpeg, .jpg" id="uploadImage" name="profile_image"/><br>
            <input type="submit" value="Upload"/>
            <br>
          </form>
	      <form action="update_donor_details.php" method="post">
        <br><hr><br>
        <fieldset>
          <legend><h3>Personal Details</legend></h3><br>
          <ul>
            <li> <label for="name">First Name:</label>
            <input type="text" class="inpudon" name="fname" id="name" value="<?php echo htmlspecialchars($donor['fname']); ?>" required></li>
            <div>
            <br>

            <li> <label for="name">Last Name:</label>
            <input type="text" class="inpudon" name="lname" id="name" value="<?php echo htmlspecialchars($donor['lname']); ?>" required></li>
            <div>
            <br>

            <li><label for="date-of-birth">Date of Birth:</label>
            <input type="date" class="inpudon" name="date-of-birth" id="date-of-birth" value="<?php echo htmlspecialchars($donor['dob']); ?>" required></li>
            <div>
            <br>

            <li><label for="weight">Weight (kg):</label>
            <input type="number" class="inpudon" name="weight" id="weight" value="<?php echo htmlspecialchars($donor['weight']); ?>" required></li>
            <div>
            <br>

            <li> <label for="blood-group">Blood Group:</label>
              <select name="blood-group" class="inpudon" id="blood-group" required></li>
                <option style="display:none;" value="<?php echo htmlspecialchars($donor['blood_type']); ?>"><?php echo htmlspecialchars($donor['blood_type']); ?></option>
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            <div>
            <br>
        
            <li> <label for="phone-number">Phone Number:</label>
            <input type="tel" class="inpudon" name="phone-number" id="phone-number" value="<?php echo htmlspecialchars($donor['phone']); ?>" required></li>
            <div>
            <br>

            <li><label for="address">Address:</label>
            <textarea name="address" class="inpudon" id="address" required><?php echo htmlspecialchars($donor['address']); ?></textarea></li>
            <div>
            <br>
      
            <button type="submit" name="update">UPDATE</button>
            <button type="button" name="delete" onclick="confirmDelete()">DELETE</button>
            <button type="button" class="logoutbtn" name="logout" onclick="confirmLogout()">LOGOUT</button>
          </ul>
        </fieldset> 
      </form>
    </div>
    <br><br><br>
    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

    <script src="js/donorProfile.js"></script>
</body>
</html>