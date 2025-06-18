function confirmDelete() {
    if (confirm("Are you sure you want to delete your account?")) {
        window.location.href = "delete_staff_details.php";
    }
}

function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = "logout.php";
    }
}


var button = document.getElementById("showuploaddiv");
var uploadDiv = document.getElementById("uploaddiv");

uploadDiv.style.display = "none";

button.onclick = function() {
    if (uploadDiv.style.display === "none") {
        uploadDiv.style.display = "block";
    } else {
        uploadDiv.style.display = "none";
    }
};