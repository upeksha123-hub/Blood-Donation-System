<?php
include("config.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
          <link rel="stylesheet" href="styles/eligibilityPage.css">
    </head>

    <body>
      <header class="header">
          <?php
              include "header.php";
          ?>
      </header>

      <div class="bd">
        <div class="ds">
               <h1>Blood Donation Eligibility</h1>
        </div>
        <div class="bde1">
              <p>
                <b>1. Age:</b> Usually between 16 to 65 years old. Age requirements might vary depending on the country or organization.<br><br>
                <b>2. Weight:</b> Typically, donors must weigh at least 50 kg (110 lbs) to donate blood.<br><br>
                <b>3. Health:</b> Donors should generally be in good health, with no acute or chronic illnesses at the time of donation.<br><br>
                <b>4. Hemoglobin Levels:</b> Adequate hemoglobin levels are necessary for blood donation. minimum hemoglobin level requirement varies depending on the country and organization.<br><br>
                <b>5. Travel History:</b> Some regions have specific travel-related deferrals due to risks of certain diseases.<br> Travel to certain countries or regions with endemic diseases may defer donation for a specific period.<br><br>
                <b>6. Medications:</b> Certain medications may defer donation temporarily or permanently, depending on their effects on blood and blood components.<br><br>
                <b>7. Medical History:</b> History of diseases like HIV/AIDS, hepatitis, or other infectious diseases may defer donation permanently.<br><br>
                <b>8. Pregnancy and Breastfeeding:</b> Usually, pregnant women and breastfeeding mothers are not eligible for blood donation.<br><br>
                <b>9. Recent Surgery or Medical Procedures:</b> Recent surgeries or medical procedures might defer donation for a certain period, depending on the type of surgery/procedure and recovery time.<br><br>
                <b>10. Behavioral Factors:</b> High-risk behaviors like intravenous drug use or having multiple sexual partners might defer donation.<br><br>
                <b>11. Vaccination:</b> Recent vaccinations may require a temporary deferral from blood donation, depending on the vaccine received.<br><br>
                <b>12. Blood Transfusion:</b> History of receiving blood transfusions may defer donation for a certain period, typically to reduce the risk of transmitting infections.
              </p>
        </div>
      </div>

        <footer class="footer">
          <?php
            include "footer.php";
          ?>
        </footer>
    </body>
</html>