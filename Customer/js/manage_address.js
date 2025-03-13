document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("addresscontainer").style.display = "none"; // Hide form initially
});

function showAddressForm() {
    document.getElementById("addresscontainer").style.display = "block";
}

function hideAddressForm() {
    document.getElementById("addresscontainer").style.display = "none";
}

// Edit Menu toggle 

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


