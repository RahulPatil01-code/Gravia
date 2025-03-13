<?php
session_start();
require '../../db_connect.php'; // Adjust path if needed

header('Content-Type: application/json'); // Ensure response is JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $addressId = intval($_POST['id']);
    $user_Id = $_SESSION['id']; // Ensure user is deleting their own address

    // Check if the address exists and belongs to the logged-in user
    $stmt = $conn->prepare("DELETE FROM user_addresses WHERE id = ? AND user_id = ?");
    if (!$stmt) {
        echo json_encode(["success" => false, "message" => "SQL Error: " . $conn->error]);
        exit;
    }

    $stmt->bind_param("ii", $addressId, $user_Id);
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to delete address."]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}
?>
