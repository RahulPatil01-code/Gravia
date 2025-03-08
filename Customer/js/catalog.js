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



document.addEventListener("DOMContentLoaded", function () {
    const categoryData = {
        "granite": { image: "images/granite.jpg", text: "Timeless beauty of Granite." },
        "marble": { image: "images/marble.jpg", text: "Luxury and elegance of Marble." },
        "onyx": { image: "images/onyx.jpg", text: "Bold and exotic Onyx collection." },
        "quartz": { image: "images/quartz.jpg", text: "Durable and stunning Quartz stones." },
        "limestone": { image: "images/limestone.jpg", text: "Classic charm of Limestone." },
        "travertine": { image: "images/travertine.jpg", text: "Rustic beauty with Travertine." },
        "soapstone": { image: "images/soapstone.jpg", text: "Smooth and natural Soapstone." },
        "slate": { image: "images/slate.jpg", text: "Modern look with premium Slate." },
        "sandstone": { image: "images/sandstone.jpg", text: "Earthy elegance of Sandstone." },
        "basalt": { image: "images/basalt.jpg", text: "Strong and stylish Basalt stones." },
        "dolomite": { image: "images/dolomite.jpg", text: "Sophisticated touch with Dolomite." },
        "serpentine": { image: "images/serpentine.jpg", text: "Unique textures of Serpentine." },
        "blue-stone": { image: "images/bluestone.jpg", text: "Cool and classy Bluestone." },
        "porphyry": { image: "images/porphyry.jpg", text: "Distinctive patterns of Porphyry." },
        "andesite": { image: "images/andesite.jpg", text: "Durability meets style in Andesite." },
        "quartzite": { image: "images/quartzite.jpg", text: "Quartzite for a natural glow." },
        "tuff": { image: "images/tuff.jpg", text: "Volcanic elegance with Tuff stone." },
        "gneiss": { image: "images/gneiss.jpg", text: "Layered beauty of Gneiss stone." },
        "schist": { image: "images/schist.jpg", text: "Unique textures with Schist." },
        "pegmatite": { image: "images/pegmatite.jpg", text: "Rare elegance of Pegmatite." },
        "rhyolite": { image: "images/rhyolite.jpg", text: "Exquisite appeal of Rhyolite." },
        "siltstone": { image: "images/siltstone.jpg", text: "Fine-grained beauty of Siltstone." },
        "chalk": { image: "images/chalk.jpg", text: "Soft and subtle charm of Chalk." },
        "breccia": { image: "images/breccia.jpg", text: "Fragmented beauty with Breccia." },
        "flint": { image: "images/flint.jpg", text: "Ancient elegance of Flint stone." },
        "chert": { image: "images/chert.jpg", text: "Durable and refined Chert stones." }
    };

    // Get current category from URL (e.g., ?category=granite)
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get("category");

    if (category && categoryData[category]) {
        document.getElementById("hero-image").src = categoryData[category].image;
        document.getElementById("hero-text").innerText = categoryData[category].text;
    }
});
