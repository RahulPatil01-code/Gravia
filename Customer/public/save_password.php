<?php
require_once 'config/db_connect.php';  // ✅ Ensures it's included only once


$user_id = $_SESSION['id'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Fetch current password from DB
$query = $conn->prepare("SELECT password FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$query->store_result();
$query->bind_result($db_password);
$query->fetch();

if (!password_verify($current_password, $db_password)) {
    echo json_encode(["status" => "error", "message" => "Current password is incorrect!"]);
    exit;
}

if ($new_password !== $confirm_password) {
    echo json_encode(["status" => "error", "message" => "New passwords do not match!"]);
    exit;
}

// Hash new password and update in DB
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
$update = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$update->bind_param("si", $hashed_password, $user_id);

if ($update->execute()) {
    echo json_encode(["status" => "success", "message" => "Password updated successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to update password."]);
}
?>
