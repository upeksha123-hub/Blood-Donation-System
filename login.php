<?php
include("config.php");
session_start();

// Check if the form was submitted
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Email and Password are required.');</script>";
    } else {
        // Function to check if user exists in a specific table
        function check_user($conn, $table, $email, $password) {
            $query = "SELECT * FROM $table WHERE email = '$email' AND password = '$password' LIMIT 1";
            $result = mysqli_query($conn, $query);
            return $result->fetch_assoc();
        }

        // Determine the user's role and redirect accordingly
        $user = null;
        $redirect = "";

        // Check each table for the user
        if ($user = check_user($conn, 'donor', $email, $password)) {
            $redirect = "donorMainPage.php";
        } elseif ($user = check_user($conn, 'medical_staff', $email, $password)) {
            $redirect = "staffMyProfilePage.php";
        } elseif ($user = check_user($conn, 'admin', $email, $password)) {
            $redirect = "adminProfile.php";
        } elseif ($user = check_user($conn, 'supplier', $email, $password)) {
            $redirect = "supplierProfile.php";
        }

        if ($user) {
            // Set session variables for successful login
            $_SESSION['user_ID'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            // Redirect to the correct page based on role
            echo "<script>window.location.href = '$redirect';</script>";
            exit();
        } else {
            echo "<script>alert('Email or Password is invalid.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/linearicons/style.css">
    <link rel="stylesheet" href="styles/loginRegister.css">
</head>

<body>

    <header class="header">
        <?php include "header.php"; ?>
    </header>

    <div class="wrapper">
        <div class="inner">
            <img src="images/image-1.png" alt="" class="image-1" width="250px">
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h3>Login</h3>
                
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                
                <div class="form-holder">
                    <span class="lnr lnr-phone-handset"></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                
                <input type="submit" class="chanubtn" name="signin" value="Login">
                
                <p>Not registered yet? <a href="register.php">Register</a></p> 
            </form>
            
            <img src="images/image-2.png" alt="" class="image-2" width="200px">
        </div>
    </div>

    <footer class="footer">
        <?php include "footer.php"; ?>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>