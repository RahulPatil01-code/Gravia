

// Wishlist 
function toggleWishlist(element, productName) {
    let wishlist = JSON.parse(sessionStorage.getItem("wishlist")) || [];

    if (wishlist.includes(productName)) {
        // Remove from wishlist
        wishlist = wishlist.filter(item => item !== productName);
        element.classList.remove("added"); // Remove red heart

        // Show "Removed from Wishlist" pop-up
        showWishlistPopup("Removed from your Wishlist");
    } else {
        // Add to wishlist
        wishlist.push(productName);
        element.classList.add("added"); // Add red heart

        // Show "Added to Wishlist" pop-up
        showWishlistPopup("Added to your Wishlist");
    }

    // Save updated wishlist in sessionStorage
    sessionStorage.setItem("wishlist", JSON.stringify(wishlist));
}

function showWishlistPopup(message) {
    // Create pop-up element
    let popup = document.createElement("div");
    popup.classList.add("wishlist-popup");
    popup.innerHTML = `<i class="fa fa-check-circle"></i> ${message}`;

    // Append to body
    document.body.appendChild(popup);

    // Show animation
    setTimeout(() => {
        popup.classList.add("show");
    }, 100);

    // Remove pop-up after 3 seconds
    setTimeout(() => {
        popup.classList.remove("show");
        setTimeout(() => {
            popup.remove();
        }, 400);
    }, 3000);
}

// Price estimate calculator 

document.addEventListener("DOMContentLoaded", function () {
    const lengthInput = document.getElementById("length");
    const widthInput = document.getElementById("width");
    const areaSpan = document.getElementById("area");
    const priceSpan = document.getElementById("price");

    // Price per square foot range
    const minPrice = 50;
    const maxPrice = 60;

    function calculate() {
        const length = parseFloat(lengthInput.value) || 0;
        const width = parseFloat(widthInput.value) || 0;
        const area = length * width;

        if (area > 0) {
            const estimatedPrice = area * ((minPrice + maxPrice) / 2); // Avg price calculation
            areaSpan.textContent = area.toFixed(2);
            priceSpan.textContent = `₹${estimatedPrice.toFixed(2)}`;
        } else {
            areaSpan.textContent = "0";
            priceSpan.textContent = "Select dimensions";
        }
    }

    lengthInput.addEventListener("input", calculate);
    widthInput.addEventListener("input", calculate);
});


// Product image swap 

function swapImage(selectedImage) {
    let mainImage = document.getElementById("mainImage");

    // Swap the images
    let tempSrc = mainImage.src;
    mainImage.src = selectedImage.src;
    selectedImage.src = tempSrc;

    // Update active thumbnail
    document.querySelectorAll(".thumb").forEach(img => img.classList.remove("active"));
    selectedImage.classList.add("active");
}





function swapImage(element) {
    document.getElementById("mainImage").src = element.src;
}

function toggleWishlist(icon, productName) {
    icon.classList.toggle("active");
    alert(productName + " has been added to your wishlist!");
}