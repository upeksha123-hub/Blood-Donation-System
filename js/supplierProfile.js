function confirmDelete() {
    if (confirm("Are you sure you want to delete your account?")) {
        window.location.href = "delete_supplier_details.php";
    }
}

function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = "logout.php";
    }
}

function order_redirect(){
    window.location.href = "orders.php";
}