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

<?php include '../includes/header.php'; ?>

<div class="profile-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>My Account</h2>
            <ul>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="#edit-profile">Edit Profile</a></li>
                <li><a href="#my-orders">My Orders</a></li>
                <li><a href="#change-password">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Dashboard -->
            <section id="dashboard">
                <h2>Dashboard</h2>
                <div class="profile-details">
                    <img src="profile.jpg" alt="Profile Picture">
                    <p><strong>Name:</strong> John Doe</p>
                    <p><strong>Email:</strong> johndoe@example.com</p>
                    <p><strong>Phone:</strong> +91 9876543210</p>
                    <p><strong>Address:</strong> 123 Street, City, Country</p>
                    <p><strong>Total Orders:</strong> 5</p>
                </div>
            </section>

            <!-- Edit Profile -->
            <section id="edit-profile">
                <h2>Edit Profile</h2>
                <form action="update_profile.php" method="POST">
                    <label>Full Name:</label>
                    <input type="text" name="name" value="John Doe">

                    <label>Email:</label>
                    <input type="email" name="email" value="johndoe@example.com" readonly>

                    <label>Phone:</label>
                    <input type="text" name="phone" value="+91 9876543210">

                    <label>Address:</label>
                    <textarea name="address">123 Street, City, Country</textarea>

                    <button type="submit">Save Changes</button>
                </form>
            </section>

            <!-- My Orders -->
            <section id="my-orders">
                <h2>My Orders</h2>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>#12345</td>
                        <td>Italian Marble</td>
                        <td>2024-03-10</td>
                        <td>Shipped</td>
                        <td>₹4,500</td>
                        <td><a href="#">View</a></td>
                    </tr>
                </table>
            </section>

            <!-- Change Password -->
            <section id="change-password">
                <h2>Change Password</h2>
                <form action="update_password.php" method="POST">
                    <label>Current Password:</label>
                    <input type="password" name="current_password" required>

                    <label>New Password:</label>
                    <input type="password" name="new_password" required>

                    <label>Confirm New Password:</label>
                    <input type="password" name="confirm_new_password" required>

                    <button type="submit">Update Password</button>
                </form>
            </section>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/wishlist.js"></script>

</body>
</html>