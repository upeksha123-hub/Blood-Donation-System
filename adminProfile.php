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
$query = "SELECT * FROM admin WHERE id = '$user_ID'";
$result = mysqli_query($conn, $query);

if ($result->num_rows === 0) {
    header('Location: login.php');
    exit();
}

$user = $result->fetch_assoc();

// Query to get the number of donors
$dquery = "SELECT COUNT(*) AS donor_count FROM donor";
$dresult = mysqli_query($conn, $dquery);
$donor_count = $dresult->fetch_assoc()['donor_count'];

// Query to get the number of medical staff
$mquery = "SELECT COUNT(*) AS staff_count FROM medical_staff";
$mresult = mysqli_query($conn, $mquery);
$staff_count = $mresult->fetch_assoc()['staff_count'];

// Query to get the number of suppliers
$squery = "SELECT COUNT(*) AS supplier_count FROM supplier";
$sresult = mysqli_query($conn, $squery);
$supplier_count = $sresult->fetch_assoc()['supplier_count'];

// Query to get the blood quantity
$aquery = "SELECT COUNT(*) AS appointment_count FROM appointment";
$aresult = mysqli_query($conn, $aquery);
$appointment_count = $aresult->fetch_assoc()['appointment_count'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  Quick Donor</title>
        <link rel="stylesheet" href="styles/adminProfile.css">
    </head>
    <body>
        
        <header>
            <?php
                include "header.php";
            ?>
        </header>

          <main class="bodt">
            <div class="headpc"><h1>Welcome to the Admin Page</h1></div>
            <section id="dashboard">
              <h2 class="dash">Dashboard</h2>
              
              <div class="box2">
                <h2 class="content-area">Dashboard Overview</h2>
                <div class="widgets">
                    <div class="widget">
                        <h3>Number of Donors</h3>
                        <p><?php echo $donor_count; ?></p>
                    </div>
                    <div class="widget">
                        <h3>Blood Units Collected (This Month)</h3>
                        <p>500 Units</p>
                    </div>
                    <div class="widget">
                        <h3>Blood Requests Pending</h3>
                        <p><?php echo $appointment_count; ?></p>
                    </div>
                    <div class="widget">
                        <h3>Blood Stock Availability</h3>
                        <p> (A+, B+, O-, etc. with respective units)</p>
                    </div>
                    <div class="widget">
                      <h3>Number of Suppliers</h3>
                      <p><?php echo $supplier_count; ?></p>
                  </div>
                  <div class="widget">
                    <h3>Number of Medical Staffs</h3>
                    <p><?php echo $staff_count; ?></p>
                </div>
                </div>
                <div class="charts-area"></div>
              </div> 
              
              <button class="btn" name="logout" onclick="confirmLogout()">Logout</button>
              <!-- <input type="button" class="formbtn logoutbtn" name="logout" onclick="confirmLogout()" value="Logout"> -->

            
          </main>
          

        <footer class="footer">
            <?php
                include "footer.php";
            ?>
        </footer>

        <script src="js/adminProfile.js"></script>
</body>
</html>
         

