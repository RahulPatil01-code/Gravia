<div class="container mt-4">
    <div class="card p-4 shadow">
        <h2 class="mb-3"><b>Change Password</b></h2>

        <form id="changePasswordForm">
            <label>Current Password</label>
            <input type="password" name="current_password" class="form-control mb-2" placeholder="Enter current password" required>

            <label>New Password</label>
            <input type="password" name="new_password" class="form-control mb-2" placeholder="Enter new password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control mb-3" placeholder="Confirm new password" required>

            <!-- ✅ MESSAGE BOX FOR SHOWING SUCCESS/ERROR -->
            <div id="password-msg" class="alert" style="display: none;"></div>

            <button type="submit" class="btn btn-success w-100">Update Password</button>
        </form>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form from refreshing page

        let formData = new FormData(this);

        fetch("profile.php?page=change_password", {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Expect JSON response
        .then(data => {
            let msgBox = document.getElementById("password-msg");
            msgBox.style.display = "block"; 
            msgBox.innerHTML = data.message;
            msgBox.className = data.success ? "alert alert-success" : "alert alert-danger";

            if (data.success) {
                setTimeout(() => window.location.reload(), 2000); // Reload after success
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Something went wrong. Please try again.");
        });
    });
});
</script>



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
</style>
