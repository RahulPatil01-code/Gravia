// ✅ Initialize AOS Animation
document.addEventListener("DOMContentLoaded", function () {
    AOS.init()
});



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



// Sort system 

function sortProducts() {
    let sortOption = document.getElementById("sort").value;
    let catalog = document.getElementById("catalog");
    let products = Array.from(catalog.getElementsByClassName("product"));

    products.sort((a, b) => {
        let priceA = parseInt(a.getAttribute("data-price"));
        let priceB = parseInt(b.getAttribute("data-price"));
        let nameA = a.getAttribute("data-name").toLowerCase();
        let nameB = b.getAttribute("data-name").toLowerCase();

        if (sortOption === "price-low") {
            return priceA - priceB;
        } else if (sortOption === "price-high") {
            return priceB - priceA;
        } else if (sortOption === "name-asc") {
            return nameA.localeCompare(nameB);
        } else if (sortOption === "name-desc") {
            return nameB.localeCompare(nameA);
        } else {
            return 0; // Default order
        }
    });

    // Clear and re-append sorted products
    catalog.innerHTML = "";
    products.forEach(product => catalog.appendChild(product));
}