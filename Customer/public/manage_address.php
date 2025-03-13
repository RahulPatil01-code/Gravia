<?php // Adjust the path based on your structure

$user_id = $_SESSION['id']; // Get logged-in user's ID

// Fetch addresses for the logged-in user
$query = "SELECT * FROM user_addresses WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

?>

<div class="container">
    <h3>Manage Addresses</h3>

    <button class="add-address-btn" onclick="showAddressForm()">➕ ADD A NEW ADDRESS</button>

    <div class="address-list">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="address-card">
                    <div class="address-info">
                        <span class="address-label"><?= strtoupper($row['address_type']) ?></span>
                        <strong><?= htmlspecialchars($row['name']) ?> 
                            <span style="color: black;"><?= htmlspecialchars($row['mobile_number']) ?></span>
                        </strong>
                        <p>
                            <?= htmlspecialchars($row['address']) ?>, 
                            <?= htmlspecialchars($row['locality']) ?>, 
                            <?= htmlspecialchars($row['city']) ?>, 
                            <?= htmlspecialchars($row['state']) ?> - 
                            <strong><?= htmlspecialchars($row['pincode']) ?></strong>
                        </p>
                    </div>
                    <div class="menu-icon" onclick="toggleMenu(<?= $row['id'] ?>)">
                        <i class="fas fa-ellipsis-v"></i> <!-- FontAwesome icon -->
                    </div>

                    <!-- Hidden Dropdown Menu -->
                    <div class="menu-options" id="menu-<?= $row['id'] ?>" style="display: none;">
                        <button onclick="editAddress(<?= $row['id'] ?>)">Edit</button>
                        <button onclick="deleteAddress(<?= $row['id'] ?>)">Delete</button>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No addresses found. Click 'Add a new address' to save one.</p>";
        }
        ?>
    </div>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Addresses</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/manage_address.css">
</head>
<body>



 <div class="address-container" id="addresscontainer">

        <!-- Address Form (Initially Hidden) -->
        <div class="address-form" id="addressForm">
            <h3>ADD A NEW ADDRESS</h3>
            <button class="location-btn">📍 Use my current location</button>

            <form action="save_address.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="mobile_number" placeholder="10-digit mobile number" required>
                </div>

                <div class="form-group">
                    <input type="text" name="pincode" placeholder="Pincode" required>
                    <input type="text" name="locality" placeholder="Locality" required>
                </div>

                <textarea name="address" placeholder="Address (Area and Street)" required></textarea>

                <div class="form-group">
                    <input type="text" name="city" placeholder="City/District/Town" required>
                    <select name="state" required>
                    <option value="">--Select State--</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CG">Chhattisgarh</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OD">Odisha</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TS">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UK">Uttarakhand</option>
                        <option value="WB">West Bengal</option>

                        <!-- Union Territories -->
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="CH">Chandigarh</option>
                        <option value="DN">Dadra and Nagar Haveli and Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="PY">Puducherry</option>

                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="landmark" placeholder="Landmark (Optional)">
                    <input type="text" name="alt_phone" placeholder="Alternate Phone (Optional)">
                </div>

                <div class="address-type">
                    <label>Address Type</label>
                    <label><input type="radio" name="address_type" value="home"> Home</label>
                    <label><input type="radio" name="address_type" value="work"> Work</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">SAVE</button>
                    <button type="button" class="cancel-btn" onclick="hideAddressForm()">CANCEL</button>
                </div>
            </form>
        </div>
    </div>


<script src="../js/manage_address.js"></script>
</body>
</html>
