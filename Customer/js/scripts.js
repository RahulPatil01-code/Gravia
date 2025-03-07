// ✅ Initialize AOS Animation
document.addEventListener("DOMContentLoaded", function () {
    AOS.init()
});

const slides = [
    { 
        img: "./src/hero-1.jpg",  
        title: "Unveiling Luxury in Every Vein", 
        text: "Experience the perfect blend of elegance and durability with our premium marble collections."
    },
    { 
        img: "./src/hero-2.jpg", 
        title: "Timeless Beauty, Modern Craftsmanship", 
        text: "Designed to redefine sophistication, our marble surfaces bring nature’s artistry into your space."
    },
    { 
        img: "./src/hero-3.jpg", 
        title: "Beyond Aesthetic, Pure Excellence", 
        text: "Discover marble that transforms interiors into masterpieces, crafted for those who seek perfection."
    },
    { 
        img: "./src/hero-4.jpg", 
        title: "Where Elegance Meets Strength", 
        text: "Our handpicked marble collections are more than just stones; they’re stories carved in nature’s perfection."
    },
    { 
        img: "./src/hero-5.jpg", 
        title: "Sculpting Dreams, One Slab at a Time", 
        text: "Create an iconic space with our world-class marble, designed to inspire generations."
    }
];

// Preload images
slides.forEach(slide => {
    const img = new Image();
    img.src = slide.img;
});

let index = 0;

function changeSlide() {
    const hero = document.querySelector(".hero");
    const heroOverlay = document.querySelector(".hero-overlay");
    const heroTitle = document.getElementById("hero-title");
    const heroText = document.getElementById("hero-text");

    // Fade out text before changing
    heroOverlay.classList.remove("fade-in");

    setTimeout(() => {
        index = (index + 1) % slides.length; // Loop through slides
        hero.style.backgroundImage = `url(${slides[index].img})`;
        heroTitle.textContent = slides[index].title;
        heroText.textContent = slides[index].text;

        // Fade in new text after changing background
        heroOverlay.classList.add("fade-in");
    },0); // Wait before changing text
}

// Change slide every 5 seconds
setInterval(changeSlide, 5000);

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






// ✅ Feedback Section (Rotating Testimonials)
document.addEventListener("DOMContentLoaded", function () {
    let testimonials = document.querySelectorAll(".testimonial-box");
    let index = 0;

    function showNextTestimonial() {
        testimonials[index].classList.remove("active");
        testimonials[index].classList.add("exit");

        index = (index + 1) % testimonials.length;

        testimonials[index].classList.remove("exit");
        testimonials[index].classList.add("active");
    }

    testimonials[index].classList.add("active"); // Initialize first testimonial as active
    setInterval(showNextTestimonial, 4000);
});