function toggleMenu(id) {
    var menu = document.getElementById(id);
    var title = menu.previousElementSibling; // Get the menu-title before the submenu

    // Toggle display
    if (menu.style.display === "block") {
        menu.style.display = "none";
        title.classList.remove("active");
    } else {
        menu.style.display = "block";
        title.classList.add("active");
    }
}


function toggleEditMode() {
    document.getElementById("profile-view").style.display = 
        document.getElementById("profile-view").style.display === "none" ? "block" : "none";
    document.getElementById("edit-form").style.display = 
        document.getElementById("edit-form").style.display === "none" ? "block" : "none";
}

// Profile Image Upload
document.getElementById("profile-img").addEventListener("click", function () {
    document.getElementById("profile-img-upload").click();
});

function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('profilePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

document.getElementById("edit-profile-btn").addEventListener("click", function() {
    document.querySelector(".profile-header").style.display = "none"; // Hide default profile
    document.getElementById("edit-form").style.display = "block"; // Show form
});


document.getElementById("profile-image-input").addEventListener("change", function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector(".profile-pic img").src = e.target.result; // Update the image preview
        };
        reader.readAsDataURL(file);
    }
});


function toggleEditMode() {
    let userDetails = document.getElementById("userDetails");
    let editForm = document.getElementById("edit-form");

    if (editForm.style.display === "none" || editForm.style.display === "") {
        userDetails.style.display = "none";  // Hide user details
        editForm.style.display = "block";    // Show edit form
    } else {
        userDetails.style.display = "block"; // Show user details
        editForm.style.display = "none";     // Hide edit form
    }
}

// Function to preview the uploaded image
function previewImage(event) {
    let reader = new FileReader();
    reader.onload = function () {
        let output = document.getElementById('profilePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.querySelector(".edit-profile-btn");
    const profileContainer = document.querySelector(".profile-container");

    editButton.addEventListener("click", function () {
        profileContainer.classList.toggle("editing");
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.getElementById("edit-profile-btn");
    const viewMode = document.querySelector(".view-mode");
    const editMode = document.querySelector(".edit-mode");
    const form = document.getElementById("edit-profile-form");
    const profileImg = document.getElementById("profile-img");
    const fileInput = document.getElementById("profile-pic");

    let currentImageSrc = profileImg.src; // Store existing image URL

    editButton.addEventListener("click", function () {
        viewMode.style.display = "none";  
        editMode.style.display = "block"; 
    });

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent actual form submission

        // Check if a new file is selected
        if (fileInput.files.length === 0) {
            // No new image selected, keep the existing one
            fileInput.setAttribute("value", currentImageSrc);
        }

        // Submit form (implement AJAX or form submission logic here)
        alert("Form submitted! (Handle backend update)");
        
        // Reset UI back to view mode (optional)
        viewMode.style.display = "block";
        editMode.style.display = "none";
    });
});


// Edit Menu toggle / Address management page 

function toggleMenu(addressId) {
    const menu = document.getElementById(`menu-${addressId}`);
    
    if (menu) {
        // Hide all other menus before showing this one
        document.querySelectorAll(".menu-options").forEach(m => {
            if (m !== menu) {
                m.style.display = "none";
            }
        });

        // Toggle visibility
        menu.style.display = menu.style.display === "block" ? "none" : "block";
    } else {
        console.error(`Menu with ID menu-${addressId} not found!`);
    }
}

// Close the menu when clicking outside
document.addEventListener("click", function(event) {
    if (!event.target.closest(".menu-icon") && !event.target.closest(".menu-options")) {
        document.querySelectorAll(".menu-options").forEach(m => {
            m.style.display = "none";
        });
    }
});


// Delete address 
function deleteAddress(addressId) {
    if (confirm("Are you sure you want to delete this address?")) {
        fetch('delete_address.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + addressId
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Address deleted successfully!");
                location.reload(); // Refresh the page to update the list
            } else {
                alert("Error: " + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
}


function deleteAddress(addressId) {
    if (!confirm("Are you sure you want to delete this address?")) return;

    fetch("delete_address.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "id=" + encodeURIComponent(addressId)
    })
    .then(response => response.text()) // Get response as text first
    .then(text => {
        console.log("🔍 Raw response from server:", text); // Debug response

        let data;
        try {
            data = JSON.parse(text); // Try to parse JSON
        } catch (error) {
            console.error("❌ JSON Parse Error:", error);
            alert("Error: Invalid response from server.");
            return;
        }

        if (data.success) {
            alert("✅ Address deleted successfully.");
            location.reload(); // Refresh to reflect changes
        } else {
            alert("❌ Error: " + data.message);
        }
    })
    .catch(error => console.error("❌ Request failed:", error));
}

// Password change page

function updatePassword(userId) {
    event.preventDefault(); // Prevent form reload

    let currentPassword = document.getElementById("current_password").value;
    let newPassword = document.getElementById("new_password").value;
    let confirmPassword = document.getElementById("confirm_password").value;
    let msgBox = document.getElementById("password-msg");

    if (!msgBox) {
        console.error("Error: #password-msg element not found!");
        return;
    }

    msgBox.style.display = "block"; // Ensure it's visible

    if (newPassword !== confirmPassword) {
        msgBox.innerHTML = "❌ New passwords do not match!";
        msgBox.className = "error fade-in";
        return;
    }

    fetch("change_password.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            user_id: userId,
            current_password: currentPassword,
            new_password: newPassword
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Response from server:", data); // Debugging log

        if (data.success) {
            msgBox.innerHTML = "✅ Password changed successfully!";
            msgBox.className = "success fade-in";
        } else {
            msgBox.innerHTML = "❌ " + data.message;
            msgBox.className = "error fade-in";
        }

        msgBox.style.display = "block"; // Force show message
    })
    .catch(error => {
        console.error("Fetch error:", error);
        msgBox.innerHTML = "❌ An error occurred. Please try again.";
        msgBox.className = "error fade-in";
        msgBox.style.display = "block"; 
    });
}

