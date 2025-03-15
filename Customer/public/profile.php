<?php
session_start();
include '../../config/db_connect.php'; // Database connection file

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}


$id = $_SESSION['id'];

// Sanitize and validate the page parameter
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 'profile_info';
$allowed_pages = ['profile_info', 'manage_address', 'change_password'];

if (!in_array($page, $allowed_pages)) {
    $page = 'profile_info'; // Default to profile_info if an invalid page is requested
}

// ✅ Fetch user details ONCE (before handling form submission)
$sql = "SELECT first_name, last_name, email, gender, dob, mobile, username, address, profile_image FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// ✅ Handle Profile Update Only When Form is Submitted
if (isset($_POST['save_changes'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $dob = trim($_POST['dob']);
    $mobile = trim($_POST['mobile']);
    $address = trim($_POST['address']);
    $current_image = $_POST['current_image'] ?? 'uploads/default-profile.jpg';

    // ✅ Handle Profile Image Upload
    if (!empty($_FILES['profile_image']['name'])) {
        $target_dir = "uploads/";
        $file_name = time() . "_" . basename($_FILES["profile_image"]["name"]);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            $profile_image = $target_file;
        } else {
            $profile_image = $current_image; // Keep old image if upload fails
        }
    } else {
        $profile_image = $current_image; // Keep old image if no new file is uploaded
    }

    // ✅ Update User Profile
    $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, gender = ?, dob = ?, mobile = ?, address = ?, profile_image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $first_name, $last_name, $email, $gender, $dob, $mobile, $address, $profile_image, $id);

    if ($stmt->execute()) {
        header("Location: profile.php?success=1"); // Redirect after update
        exit();
    } else {
        echo "Error updating profile.";
    }
    // Manage Address code 


if (isset($_POST['save_address'])) {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    // Database Connection
    include('../config/db_connect.php');

    // Update query (Modify table & columns as needed)
    $query = "UPDATE users SET full_name='$full_name', phone='$phone', address='$address', city='$city', state='$state', zip='$zip' WHERE id='$user_id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Address updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating address');</script>";
    }
}
    
// Password change code 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    header('Content-Type: application/json'); // Ensure JSON response

    $user_id = $_SESSION['id']; // Get logged-in user ID
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validate input fields
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        echo json_encode(["success" => false, "message" => "Please fill in all fields."]);
        exit;
    }

    if ($new_password !== $confirm_password) {
        echo json_encode(["success" => false, "message" => "New passwords do not match."]);
        exit;
    }

    // Fetch user's current password from DB
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        // Verify current password
        if (password_verify($current_password, $stored_password)) {
            // Hash new password and update in DB
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $update_stmt->bind_param("si", $hashed_password, $user_id);

            if ($update_stmt->execute()) {
                echo json_encode(["success" => true, "message" => "Password updated successfully!"]);
            } else {
                echo json_encode(["success" => false, "message" => "Failed to update password."]);
            }
        } else {
            echo json_encode(["success" => false, "message" => "Current password is incorrect."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "User not found."]);
    }
}
    $stmt->close();
    $conn->close();
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravia Home | Elevate Your Space</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@300;400;500&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animations & Swiper -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
</head>
<body>

<?php include_once '../includes/header.php'; ?>

<div class="profile-container">
    
    <div class="sidebar">
        <div class="profile-box">
            <img src="<?php echo $user['profile_image'] ? $user['profile_image'] : 'uploads/default-profile.jpg'; ?>" alt="User Avatar" class="profile-box-img">
            <div class="profile-text">
                <p>Hello,</p>
                <h2><?php echo htmlspecialchars($user['username']); ?></h2>
            </div>
        </div>
        <div class="menu-box">
            <ul class="sidebar-menu">
                <li class="menu-title">Account Settings</li>
                <li><a href="profile.php?page=profile_info" onclick="showTab('profile-info')"><i class="fas fa-user"></i> Profile Information</a></li>
                <li><a href="profile.php?page=manage_address"><i class="fas fa-map-marker-alt"></i> Manage Addresses</a></li>
                <li><a href="profile.php?page=change_password"><i class="fas fa-lock"></i> Change Password</a></li>
                <li><a href="#"><i class="fas fa-box"></i> My Orders</a></li>
                <li><a href="#"><i class="fas fa-history"></i> Order History</a></li>
                <li><a href="#"><i class="fas fa-question"></i> My Inquires</a></li>
                <li><a href="../../public/logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="content-area">
        <div class="info-box">
    

                <?php
                    // Include the selected page's content
                    $file = $page . ".php";
                    if (file_exists($file)) {
                        include($file);
                    } else {
                        echo "<p>Page not found.</p>";
                    }
                ?>

                <?php
                    if (isset($_POST['save_changes'])) {
                        // Handle profile update logic
                    }

                    if (isset($_POST['save_address'])) {
                        // Handle address update logic
                    }

                    if(isset($_POST['submit'])){

                    }
                ?>

                


        <!-- JavaScript to Preview the Image -->
        <script>
            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('profilePreview');
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>

        </div>
    </div>

</div>



<?php include '../includes/footer.php'; ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/profile.js"></script>

</body>
</html>