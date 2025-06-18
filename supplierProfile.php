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
$query = "SELECT * FROM supplier WHERE id = '$user_ID'";
$result = mysqli_query($conn, $query);

if ($result->num_rows === 0) {
    header('Location: login.php');
    exit();
}

$supplier = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/supplierProfile.css"> 
    <link rel ="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="head1">
        <!-- <div class="ph"> -->
        <div class="ph1">
            <p class="spt1">Supplier Profile</p>
        </div>
        <!-- </div> -->

        <div  class="phc2">
            <p class="phct">WELCOME SUPPLIER! </p>
        </div>
    </div>

    <div class="mg"> 
        <div class="pfs">
            <div class="pf">
                <p class="pfh">Supplier Details </p> 
            </div>

            <div class="ps">
                <p class="psh">My Service</p>
            </div>
        </div>

        <div class="sdm">
            <div class="sd">
                <div class="account_info">

                    <div class="ph2">
                        <img class="imgm1" src="images/maleesha/default_profile_picture.png" alt="Profile pic">
                    </div>
                    <br>

                    <form action="update_supplier_details.php" method="post">

                        <label for="Cname" class="account_label">Name:</label>  
                        <input type="text" class="bx1" id="Cname" name="Cname" value="<?php echo htmlspecialchars($supplier['name']); ?>"><br><br>

                        <label for="Cnic" class="account_label">NIC:</label>  
                        <input type="text" class="bx1" id="Cnic" name="Cnic" value="<?php echo htmlspecialchars($supplier['nic']); ?>"><br><br>
    
                        <label for="CNumber" class="account_label">Contact Number:</label>   
                        <input type="text" class="bx1" id="CNumber" name="CNumber" value="<?php echo htmlspecialchars($supplier['phone']); ?>"><br><br>
    
                        <label for="email" class="account_label">Email :</label>   
                        <input type="text" class="bx1" id="email" name="email" value="<?php echo htmlspecialchars($supplier['email']); ?>"><br><br>

                        <label for="Address" class="account_label"> Address:</label>   
                        <input type="text" class="bx1" id="address" name="address" value="<?php echo htmlspecialchars($supplier['address']); ?>"><br><br>

                        <label for="age" class="account_label">Age:</label>   
                        <input type="text" class="bx1" id="age" name="age" value="<?php echo htmlspecialchars($supplier['age']); ?>"><br><br>
                        
                        <div class="bar">
                            <input type="submit" class="formbtn" name="save" value="Save">
                            <input type="button" class="formbtn" name="delete" onclick="confirmDelete()" value="Delete">
                            <input type="button" class="formbtn logoutbtn" name="logout" onclick="confirmLogout()" value="Logout" >
                            <input type="button" class="formbtn orders" name="orders" onclick="order_redirect()" value="Orders">
                        </div>
                        
                    </form>

                </div>
            </div>

            <div class="ms">
                    <p>1. Blood Collection: The supplier coordinates and manages the collection of blood from donors.<br>
                        This may involve setting up blood drives at various locations, such as schools, workplaces,<br>
                        community centers, and providing the necessary equipment and personnel for blood collection.</p>
                    <p>2. Donor Screening: Suppliers often conduct thorough screening of potential blood donors to ensure that donated blood is safe for transfusion.<br>
                        This screening process may include assessing the donor's medical history, <br>
                        conducting physical examinations, and testing for infectious diseases.</p>
                    <p>3. Emergency Response: In times of emergencies or natural disasters,<br>
                        blood suppliers play a crucial role in mobilizing resources and ensuring an adequate supply of blood for those in need.<br>
                        They may coordinate emergency blood drives and expedite the processing and distribution of donated blood.</p>
            </div>

        </div>
    </div>
    </div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

    <script src="js/supplierProfile.js"></script>
</body>
</html>