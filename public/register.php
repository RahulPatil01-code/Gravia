<?php
session_start();
include '../config/db_connect.php'; // Database connection file

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        $_SESSION['alert_message'] = "Swal.fire('Error!', 'Passwords do not match!', 'error');";
    } else {
        // Check if email already exists
        $check_email = mysqli_prepare($conn, "SELECT id FROM users WHERE email = ?");
        mysqli_stmt_bind_param($check_email, "s", $email);
        mysqli_stmt_execute($check_email);
        mysqli_stmt_store_result($check_email);

        if (mysqli_stmt_num_rows($check_email) > 0) {
            $_SESSION['alert_message'] = "Swal.fire('Error!', 'Email is already registered!', 'warning');";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into database
            $sql = "INSERT INTO users (first_name, last_name, username, email, gender, password) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $username, $email, $gender, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['alert_message'] = "Swal.fire({
                    title: 'Success!',
                    text: 'Registration Successful! Redirecting...',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = 'login.php';
                });";
            } else {
                $_SESSION['alert_message'] = "Swal.fire('Error!', 'Something went wrong. Try again!', 'error');";
            }
        }
    }
    // Close database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravia Home | Register</title>

    <!-- Bootstrap & SweetAlert -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>

    <div class="wrapper" style="background-image: url('../src/reg-bg.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="../src/statue-reg.jpg" alt="">
            </div>
            <form action="register.php" method="POST">
                <h3>Registration Form</h3>
                <p class="welcome-text">Sign up today to experience world-class marble craftsmanship and exclusive access to our premium collection.</p>
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <select name="gender" class="form-control" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option> <!-- Fixed spelling -->
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" required>
                </div>
                <div class="btn-container">
                    <button type="submit"  name="register" class="btn">
                        Register <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Show Alert if Needed -->
	<script>
    <?php
    if (isset($_SESSION['alert_message'])) {
        echo $_SESSION['alert_message']; 
        unset($_SESSION['alert_message']); // Clear message after displaying
    }
    ?>
</script>
</body>
</html>
