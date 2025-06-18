<?php
include("config.php");
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_ID'])) {
    header('Location: login.php');
    exit();
}

$user_ID = $_SESSION['user_ID']; // Get the current user's ID

$upload_dir = 'images/donor_pictures/'; // Where to save the uploaded files
$allowed_types = ['image/jpeg', 'image/png', 'image/jpg']; // Allowed file types
$max_size = 2 * 1024 * 1024; // Maximum file size (2 MB)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $uploaded_file = $_FILES['profile_image']; // The uploaded file
        $file_type = $uploaded_file['type']; // The file type
        $file_size = $uploaded_file['size']; // The file size

        // Check if the file type is allowed and the size is within the limit
        if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
            // Get the file extension (like 'jpg' or 'png')
            $file_extension = pathinfo($uploaded_file['name'], PATHINFO_EXTENSION);
            // Create a unique name for the file to avoid conflicts
            $unique_filename = 'profile_' . uniqid() . '.' . $file_extension;
            $file_path = $upload_dir . $unique_filename; // Full path to save the file

            // Make sure the upload directory exists, create if not
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($uploaded_file['tmp_name'], $file_path)) {
                // Save the new image path in the database
                $update_query = "UPDATE donor SET profile_picture = '$file_path' WHERE id = $user_ID";
                mysqli_query($conn, $update_query);

                // Redirect to the profile page after successful upload
                header('Location: donorProfilePage.php');
                exit();
            } else {
                // If moving the file fails
                echo "<script>alert('Error: Unable to save the uploaded file.'); window.location.href = 'donorProfilePage.php';</script>";
            }
        } else {
            // If the file type or size is invalid
            echo "<script>alert('Error: Invalid file type or size exceeds 2 MB.'); window.location.href = 'donorProfilePage.php';</script>";
        }
    } else {
        // If there's an error in the upload process
        echo "<script>alert('Error: Failed to upload the file.'); window.location.href = 'donorProfilePage.php';</script>";
    }
} else {
    // If someone accesses this script without POST data
    header('Location: donorProfilePage.php');
    exit();
}

?>