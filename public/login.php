<?php
session_start();
include '../config/db_connect.php'; // Database connection file

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['alert_message'] = "Swal.fire('Error!', 'All fields are required!', 'warning');";
    } else {
        // Check if email exists
        $stmt = mysqli_prepare($conn, "SELECT id, password, username FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $id, $hashed_password, $username);
            mysqli_stmt_fetch($stmt);

            if (password_verify($password, $hashed_password)) {
                // Set session variables
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;

                $_SESSION['alert_message'] = "Swal.fire('Success!', 'Login Successful! Redirecting...', 'success').then(() => {
                    window.location.href = '../customer/Index.php';
                });";
            } else {
                $_SESSION['alert_message'] = "Swal.fire('Error!', 'Invalid email or password!', 'error');";
            }
        } else {
            $_SESSION['alert_message'] = "Swal.fire('Error!', 'No account found with this email!', 'error');";
        }
    }
}
?>


<!DOCTYPE html>
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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<body>

		<div class="wrapper" style="background-image: url('../src/login-bg.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../src/vishnu.jpg" alt="" class="registration-image">
				</div>
				<form action="login.php" method="POST">
					<h3>Login to <span class="highlight">Gravia</span></h3>
                    <p class="welcome-text">Welcome back! Enter your credentials to access your account and explore our exclusive collection.</p>
                
                    <div class="form-wrapper">
                        <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
					
					<div class="form-wrapper">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
					
                    <div class="btn-container">
                        <button type="submit" name="login" class="btn">
                            Login <i class="zmdi zmdi-arrow-right"></i>
                        </button>

                        <a href="register.php" class="btn">
                            Register now <i class="zmdi zmdi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="social-login">
                    <p>Or login with</p>
                    <div class="social-icons">
                        <a href="#" class="facebook"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#" class="google"><i class="zmdi zmdi-google"></i></a>
                        <a href="#" class="twitter"><i class="zmdi zmdi-twitter"></i></a>
                    </div>
                </div>

                <div class="additional-links">
                    <a href="#">Forgot Password?</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </div>
				</form>
			</div>
		</div>
		
        <!-- Show Alert if Needed -->
    <script>
        <?php if (isset($_SESSION['alert_message'])) { 
            echo $_SESSION['alert_message']; 
            unset($_SESSION['alert_message']); // Clear message after displaying
        } ?>
    </script>

	</body>
</html>