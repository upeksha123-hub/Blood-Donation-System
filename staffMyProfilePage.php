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
$query = "SELECT * FROM medical_staff WHERE id = '$user_ID'";
$result = mysqli_query($conn, $query);

if ($result->num_rows === 0) {
    header('Location: login.php');
    exit();
}

$user = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Donor | Staff MyProfile Page</title>

    <link rel="stylesheet" href="styles/staffMyProfilestyles.css">

</head>
<body>
    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="outerbg"><div class="outershadow">

    <div class="container_stf">

        <div class="row">
            <h1>My Profile</h1>
        </div>

        <div class="row row2">
            <div class="profile_img">
                <img src="<?php echo htmlspecialchars($user['ms_profile_picture']); ?>" alt="profile image" width="100%"/>
            </div>

            <div class="account_info">
                <form action="update_staff_details.php" method="post">
                    <label for="name" class="account_label">Name:</label>  
                    <input type="text" class="input_box" id="name" name="name" value="<?php echo htmlspecialchars($user['ms_name']); ?>"><br>

                    <label for="nic" class="account_label">NIC:</label>   
                    <input type="text" class="input_box" id="nic" name="nic" value="<?php echo htmlspecialchars($user['ms_nic']); ?>"><br>

                    <label for="med_id" class="account_label">Medical ID:</label>   
                    <input type="text" class="input_box" id="med_id" name="med_id" value="<?php echo htmlspecialchars($user['id']); ?>"><br>

                    <label for="phone_no" class="account_label">Phone No:</label>   
                    <input type="text" class="input_box" id="phone_no" name="phone_no" value="<?php echo htmlspecialchars($user['ms_phone']); ?>"><br>
                    
                    <label for="email" class="account_label">Email:</label>   
                    <input type="text" class="input_box" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"><br>

                    <label for="address" class="account_label">Address:</label>   
                    <input type="text" class="input_box" id="address" name="address" value="<?php echo htmlspecialchars($user['ms_address']); ?>"><br>

                    <input type="button" class="formbtn logoutbtn" name="logout" onclick="confirmLogout()" value="Logout">
                    <input type="submit" class="formbtn" name="save" value="Save">
                    <input type="button" class="formbtn" name="delete" onclick="confirmDelete()" value="Delete">
                </form>
            </div>

            <div class="changeimgbtn">
                <button id="showuploaddiv">Change Image</button><br>
                <div id="uploaddiv" class="showupload">
                    <form action="upload_image.php" method="post" enctype="multipart/form-data">
                        <input type="file" accept=".png, .jpeg, .jpg" id="uploadImage" name="profile_image"/><br>
                        <input type="submit" value="Upload"/> 
                    </form>
                </div>
            </div>
        </div>

        <div class="row3">
            <div class="fl1">
                <div class="fl2">
                    <h4>Appointments</h4>
                    <textarea readonly class="fltextarea" cols="70" rows="6" style="resize: none;">
                        <?php echo htmlspecialchars($user['ms_appointments']); ?>
                    </textarea>
                </div>
                
                <div class="fl2">
                    <h4>Statistics</h4>
                    <textarea readonly class="fltextarea" cols="70" rows="6" style="resize: none;">
                        <?php echo htmlspecialchars($user['ms_statics']); ?>
                    </textarea>
                </div>
            </div>
            
            <div class="fl1">
                <div class="fl2">
                    <h4>Messages</h4>
                    <textarea readonly class="fltextarea" cols="50" rows="6" style="resize: none;">
                        <?php echo htmlspecialchars($user['ms_messages']); ?>
                    </textarea>
                </div>
                
                <div class="fl2img">
                    <img src="images/ruvindu/logo1.png" width="50%">
                </div>
            </div>
        </div>

    </div>
    
    </div></div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>


    <script src="js/staffMyProfileJs.js"></script>
    
</body>
</html>