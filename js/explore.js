const slides = [
    { 
        img: "../src/explore-1.jpg",  
        title: "Unveiling Luxury in Every Vein", 
        text: "Experience the perfect blend of elegance and durability with our premium marble collections."
    },
    { 
        img: "../src/explore-1.jpg", 
        title: "Timeless Beauty, Modern Craftsmanship", 
        text: "Designed to redefine sophistication, our marble surfaces bring nature’s artistry into your space."
    },
    { 
        img: "../src/explore-2.jpg", 
        title: "Beyond Aesthetic, Pure Excellence", 
        text: "Discover marble that transforms interiors into masterpieces, crafted for those who seek perfection."
    },
    { 
        img: "../src/explore-3.jpg", 
        title: "Where Elegance Meets Strength", 
        text: "Our handpicked marble collections are more than just stones; they’re stories carved in nature’s perfection."
    },
    { 
        img: "../src/explore-4.jpg", 
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
    }, 500); // Wait before changing text
}

// Change slide every 5 seconds
setInterval(changeSlide, 5000);

// ✅ Quote Button Alert (SweetAlert2)
document.querySelectorAll(".quote-btn").forEach(button => {
    button.addEventListener("click", function(event) {
        event.preventDefault(); // Stop direct navigation
        
        Swal.fire({
            title: "Login Required",
            text: "You need to login to get details!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Login Now",
            cancelButtonText: "Maybe Later"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "login.php"; // Redirect if "Login Now" is clicked
            }
        });
    });
});

// ✅ Read More Modal (Dynamic for All Sections)
document.querySelectorAll(".read-more-link").forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();

        // Get modal elements
        const modal = document.getElementById("exploreModal");
        const modalTitle = document.getElementById("modal-title");
        const modalImage = document.getElementById("modal-image");
        const modalText = document.getElementById("modal-text");

        // Update modal content dynamically
        modalTitle.innerHTML = this.dataset.title;
        modalImage.src = this.dataset.image;
        modalText.innerHTML = this.dataset.text;

        // Show modal
        modal.style.display = "flex";
    });
});

// ✅ Close Modal Function
document.querySelector(".close").addEventListener("click", function() {
    document.getElementById("exploreModal").style.display = "none";
});

// ✅ Close Modal on Click Outside
window.addEventListener("click", function(event) {
    const modal = document.getElementById("exploreModal");
    if (modal && event.target === modal) {
        modal.style.display = "none";
    }
});

// ✅ Hide Modal on Page Load (Prevents Flash Opening)
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("exploreModal");
    if (modal) {
        modal.style.display = "none";
    }
});


// Quote alert button
 
document.querySelectorAll(".explore-btn").forEach(button => {
    button.addEventListener("click", function(event) {
        event.preventDefault();

        Swal.fire({
            title: "Login Required",
            text: "You need to login to get a quote!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Login Now",
            cancelButtonText: "Maybe Later"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "login.php";
            }
        });
    });
});
