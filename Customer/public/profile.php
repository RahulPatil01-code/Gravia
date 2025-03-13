<?php
session_start();


include '../../config/db_connect.php'; // Database connection file

if (!isset($_SESSION['id'])) {
    die("User ID is not set. Login again.");
} else {
    echo "User ID: " . $_SESSION['id']; // Debugging output
}

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

// Fetch user details before update
$sql = "SELECT first_name, last_name, email, gender, dob, mobile, username, address, profile_image FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (isset($_POST['save_changes'])) {
    require '../../config/db_connect.php'; // Make sure your database connection is included

    // Get the current image from the form
    $current_image = !empty($_POST['current_image']) ? $_POST['current_image'] : 'uploads/default.png';

    // Check if a new file was uploaded
    if (!empty($_FILES['profile_image']['name'])) {
        $target_dir = "uploads/";
        $file_name = time() . "_" . basename($_FILES["profile_image"]["name"]); // Prevent name conflicts
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            $profile_image = $target_file; // Use the new uploaded image
        } else {
            $profile_image = $current_image; // Keep the old image if upload fails
        }
    } else {
        $profile_image = $current_image; // Keep the old image if no new file was uploaded
    }

    // Update the database
    session_start();
include '../../config/db_connect.php'; // Database connection file

if (!isset($_SESSION['id'])) {
    die("User ID is not set. Login again.");
}


$id = $_SESSION['id'];

// Fetch user details before update
$sql = "SELECT first_name, last_name, email, gender, dob, mobile, username, address, profile_image FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (isset($_POST['save_changes'])) {
    require '../../config/db_connect.php'; // Ensure database connection

    // 🟢 **Retrieve form values safely**
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : "";
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : "";
    $dob = isset($_POST['dob']) ? trim($_POST['dob']) : "";
    $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : "";
    $address = isset($_POST['address']) ? trim($_POST['address']) : "";
    $current_image = isset($_POST['current_image']) ? $_POST['current_image'] : 'uploads/default.png';

    // 🟢 **Handle Profile Image Upload**
    if (!empty($_FILES['profile_image']['name'])) {
        $target_dir = "uploads/";
        $file_name = time() . "_" . basename($_FILES["profile_image"]["name"]);
        $target_file = $target_dir . $file_name;
    
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            $profile_image = $target_file; // Use the new uploaded image
        } else {
            echo "File upload failed!";
            $profile_image = $current_image; // Keep the old image if upload fails
        }
    } else {
        $profile_image = $current_image; // Keep the old image if no new file was uploaded
    }
    

    

    // 🟢 **Update Database Query**
    $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, gender = ?, dob = ?, mobile = ?, address = ?, profile_image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $first_name, $last_name, $email, $gender, $dob, $mobile, $address, $profile_image, $id);

    if ($stmt->execute()) {
        header("Location: profile.php?success=1"); // Redirect after successful update
        exit();
    } else {
        echo "Error updating profile.";
    }

    $stmt->close();
    $conn->close();
}

    
    if ($stmt->execute()) {
        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating profile.";
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
        <img src="<?php echo $user['profile_image'] ? $user['profile_image'] : 'profile-avatar.png'; ?>" alt="User Avatar" class="profile-box-img">
        <div class="profile-text">
            <p>Hello,</p>
            <h2><?php echo htmlspecialchars($user['username']); ?></h2>
        </div>
    </div>
    <div class="menu-box">
        <ul class="sidebar-menu">
            <li class="menu-title">Account Settings</li>
            <li><a href="#" onclick="showTab('profile-info')"><i class="fas fa-user"></i> Profile Information</a></li>
            <li><a href="#"><i class="fas fa-map-marker-alt"></i> Manage Addresses</a></li>
            <li><a href="#"><i class="fas fa-lock"></i> Change Password</a></li>
            <li><a href="#"><i class="fas fa-box"></i> My Orders</a></li>
            <li><a href="#"><i class="fas fa-history"></i> Order History</a></li>
            <li class="menu-title" onclick="toggleMenu('payments')">
                Payments & Transactions <i class="fas fa-chevron-down"></i>
            </li>
            <ul id="payments" class="submenu">
                <li><a href="#"><i class="fas fa-wallet"></i> Saved Payment Methods</a></li>
                <li><a href="#"><i class="fas fa-gift"></i> Gift Cards & Coupons</a></li>
                <li><a href="#"><i class="fas fa-file-invoice"></i> Invoices & Receipts</a></li>
            </ul>
            <li class="menu-title" onclick="toggleMenu('support')">
                Customer Support <i class="fas fa-chevron-down"></i>
            </li>
            <ul id="support" class="submenu">
                <li><a href="#"><i class="fas fa-question-circle"></i> Help & Support</a></li>
                <li><a href="#"><i class="fas fa-undo-alt"></i> Return & Refund Policy</a></li>
                <li><a href="#"><i class="fas fa-exclamation-triangle"></i> Report an Issue</a></li>
            </ul>
            <li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
</div>

        <div class="content-area">
            <div class="info-box">
            <div id="userDetails">
                <div class="profile-header">
                    <div class="profile-pic">
                        <img id="profile-image" src="<?php echo $user['profile_image'] ? $user['profile_image'] : 'default-profile.png'; ?>" alt="User Profile">
                        <input type="file" id="profile-img-upload"  style="display: none;">
                    </div>
                    <div class="user-info">
                        <h2 class="username"><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></h2>
                    </div>
                </div>

                <!-- View Mode -->
                <div class="user-details" id="profile-view">
                    <div class="user-info">
                        <div class="column">
                            <label>First Name</label>
                            <p><?php echo htmlspecialchars($user['first_name']); ?></p>
                        </div>
                        <div class="column">
                            <label>Last Name</label>
                            <p><?php echo htmlspecialchars($user['last_name']); ?></p>
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="column">
                            <label>Email</label>
                            <p><?php echo htmlspecialchars($user['email']); ?></p>
                        </div>
                        <div class="column">
                            <label>Gender</label>
                            <p><?php echo htmlspecialchars($user['gender']); ?></p>
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="column">
                            <label>Date of Birth</label>
                            <p><?php echo htmlspecialchars($user['dob']); ?></p>
                        </div>
                        <div class="column">
                            <label>Mobile Number</label>
                            <p><?php echo htmlspecialchars($user['mobile']); ?></p>
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="column full-width">
                            <label>Address</label>
                            <p><?php echo htmlspecialchars($user['address']); ?></p>
                        </div>
                    </div>
                </div>
                    <button class="edit-profile-btn" onclick="toggleEditMode()">Edit Profile</button>
                </div>

                <!-- Edit Mode (Hidden by Default) -->
            <form id="edit-form" class="user-details" style="display: none;" method="POST" enctype="multipart/form-data">
                <div class="user-info">
                    <div class="column full-width">
                        <!-- Profile Picture Preview -->
                        <label>Profile Picture</label>
                        <div style="text-align: center;">
                            <img id="profilePreview" src="<?php echo !empty($user['profile_image']) ? $user['profile_image'] : 'uploads/default.png'; ?>" 
                                alt="Profile Image" 
                                style="width: 120px; height: 120px; border-radius: 50%; cursor: pointer; object-fit: cover;"
                                onclick="document.getElementById('profileImageInput').click();">
                        </div>
                        <!-- Hidden File Input -->
                        <input type="file" id="profileImageInput" name="profile_image" accept="image/*" style="display: none;" onchange="previewImage(event)">
                        <input type="hidden" name="current_image" id="currentImageInput" value="<?php echo htmlspecialchars($user['profile_image']); ?>">

                    </div>
                </div>

                <div class="user-info">
                    <div class="column">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>">
                    </div>
                    <div class="column">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>">
                    </div>
                </div>
                <div class="user-info">
                    <div class="column">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
                    </div>
                    <div class="column">
                        <label>Gender</label>
                        <select name="gender">
                            <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                            <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                        </select>
                    </div>
                </div>
                <div class="user-info">
                    <div class="column">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>">
                    </div>
                    <div class="column">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" value="<?php echo htmlspecialchars($user['mobile']); ?>">
                    </div>
                </div>
                <div class="user-info">
                    <div class="column full-width">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo htmlspecialchars($user['address']); ?>">
                    </div>
                </div>

                <button type="submit" name="save_changes">Save Changes</button>
                <button type="button" onclick="toggleEditMode()">Cancel</button>
            </form>

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