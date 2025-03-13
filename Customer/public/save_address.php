<?php
session_start();
include '../../config/db_connect.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['id'])) {
        die("User not logged in.");
    }

    $user_id = $_SESSION['id']; // Get logged-in user ID
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
    $pincode = $_POST['pincode'];
    $locality = $_POST['locality'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $landmark = !empty($_POST['landmark']) ? $_POST['landmark'] : NULL;
    $alternate_phone = !empty($_POST['alternate_phone']) ? $_POST['alternate_phone'] : NULL;
    $address_type = $_POST['address_type'];

    // Database Insert Query
    $sql = "INSERT INTO user_addresses (user_id, name, mobile_number, pincode, locality, address, city, state, landmark, alternate_phone, address_type) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssssssss", $user_id, $name, $mobile_number, $pincode, $locality, $address, $city, $state, $landmark, $alternate_phone, $address_type);

    if ($stmt->execute()) {
        echo "<script>alert('Address saved successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Error saving address. Please try again.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
