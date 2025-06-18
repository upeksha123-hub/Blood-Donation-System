<?php
include("config.php");
session_start();

$form_query = "SELECT form_id, form_path FROM donor_form";
$form_result = mysqli_query($conn, $form_query);

$new_donor_form_path = '';
$parental_consent_form_path = '';

if ($form_result && mysqli_num_rows($form_result) > 0) {
    // Iterate over the result set to determine which path corresponds to each form_id
    while ($form = mysqli_fetch_assoc($form_result)) {
        if ($form['form_id'] == 1) {
            $new_donor_form_path = htmlspecialchars($form['form_path']); // Path to New Donor Form
        } elseif ($form['form_id'] == 2) {
            $parental_consent_form_path = htmlspecialchars($form['form_path']); // Path to Parental Consent Form
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Donor | Donor Main Page</title>
    
    <link rel="stylesheet" href="styles/donorMainStyles.css"> <!-- Link to your stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- FontAwesome icons -->
</head>
<body>

    <header class="header">
        <?php
            include "header.php";
        ?>
    </header>

    <div class="outerbg"><div class="outershadow">

    <div class="container">
        <h1>Let's do this!</h1>
        <p>Thank you for choosing to be a hero. Donate blood today and make a life-saving impact.</p>
    </div>
    
    <div class="container1">
        <div class="item1">
            <h2>Make an Appointment</h2>
            <img id="blooddropimg" src="images/ruvindu/blooddrop.png" alt="Blood Drop" width="200px">
            <p><i>You're just a few clicks away from saving a life.</i></p>
            <a href="appointment.php"><button class="btn1">Donate Now</button></a>
            <p>Donating blood is one of the simplest yet most impactful ways to help your community.
                <b>Click the "Donate Now" button to start the process and be the hero someone needs today.</b></p>
        </div>

        <div class="item2">
            <h2>Am I Eligible to Donate?</h2>
            <a href="eligibilityPage.php"><button class="btn1">Check</button></a>
            <p>Wondering if you can donate blood? Click the button to find out if you meet the requirements.</p>
        </div>
        
        <div class="item3">
            <h2>Donor Forms and Documents</h2>
            <p>To donate blood, you need to fill out some essential forms. If you're a new donor, start with the New Donor Form. For donors under 18, the Parental Consent Form is required. Click below to download the forms and get started.</p>
            <a href="<?php echo $new_donor_form_path; ?>" download><button class="btn1">New Donor Form</button></a><br>
            <a href="<?php echo $parental_consent_form_path; ?>" download><button class="btn1">Parental Consent Form</button></a>
        </div>
        
        <div class="item4">
            <h2>Where Can I Donate?</h2>
            <p>Looking for a nearby location to donate blood? We've got you covered.
                 Our network of donation centers and mobile blood drives makes it easy to find a spot close to you.
                  Click below to discover a location near you and book your appointment today!</p>
            <a href="donationCentersPage.php"><button class="btn1">Find Locations</button></a>
        </div>
    </div>

    <div class="container2">
        <!-- <hr> -->
        <div class="image-wrapper">
            <a href="feedback.php"><img id="tellusimg" src="images/ruvindu/tellus.png" alt="Tell Us" width="300px"></a>
        </div>
    </div>

    </div></div>

    <footer class="footer">
        <?php
            include "footer.php";
        ?>
    </footer>

</body>
</html>
