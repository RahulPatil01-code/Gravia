<?php // Adjust path if needed

file_put_contents("debug_log.txt", print_r($_POST, true));



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION['id']; // Assuming session holds the user ID
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    // Fetch user's current password from DB
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();
        
        if (password_verify($current_password, $stored_password)) {
            // Hash new password and update DB
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $update_stmt->bind_param("si", $hashed_password, $user_id);
            
            if ($update_stmt->execute()) {
                echo json_encode(["success" => true]);
            } else {
                echo json_encode(["success" => false, "message" => "Failed to update password."]);
            }
        } else {
            echo json_encode(["success" => false, "message" => "Current password is incorrect."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "User not found."]);
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}
?>

<style>
    .password-form {
    width: 100%;
    max-width: 400px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.password-form label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.password-form input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.password-form button {
    width: 100%;
    background: #28a745;
    color: white;
    padding: 10px;
    margin-top: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.password-form button:hover {
    background: #218838;
}

#password-msg {
    text-align: center;
    margin-top: 10px;
}

#password-msg {
    display: none;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
    font-weight: bold;
    text-align: center;
    transition: opacity 0.5s ease-in-out;
}

.success {
    display: block;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.error {
    display: block;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.fade-in {
    opacity: 1;
}


    </style>
<div class="container">
    <h3>Change Password</h3>
    
    <form id="changePasswordForm" method="POST">
    <div class="password-form">
        <label for="current_password">Current Password</label>
        <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>

        <label for="new_password">New Password</label>
        <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>

        <button type="submit">Update Password</button>

        <p id="password-msg" style="display:none;"></p> <!-- Display success/error message -->
    </div>
</form>
</div>


<script src="profile.js"></script>
