
            <div id="userDetails">
                <div class="profile-header">
                    <div class="profile-pic">
                        <img id="profile-image" src="<?php echo $user['profile_image'] ? $user['profile_image'] : 'uploads/default-profile.jpg'; ?>" alt="User Profile">
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

                

<form id="edit-form" class="user-details" style="display: none;" method="POST" enctype="multipart/form-data">
                <div class="user-info">
                    <div class="column full-width">
                        <!-- Profile Picture Preview -->
                        <label>Profile Picture</label>
                        <div style="text-align: center;">
                            <img id="profilePreview" src="<?php echo !empty($user['profile_image']) ? $user['profile_image'] : 'uploads/default-profile.jpg'; ?>" 
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