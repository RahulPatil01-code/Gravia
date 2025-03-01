// ✅ Initialize AOS Animation
AOS.init();

// ✅ Swiper Slider - Auto Slides & Stays in Frame
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: { 
        delay: 3000,
        disableOnInteraction: false 
    },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
});

// ✅ Client & Awards Counter (Optimized)
document.addEventListener("DOMContentLoaded", function () {
    function startCounter(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute("data-target");
                let count = 0;
                const speed = target / 200;

                const updateCounter = () => {
                    count += speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count) + "+";
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + "+";
                    }
                };

                updateCounter();
            }
        });
    }

    const counters = document.querySelectorAll(".counter");
    const observer = new IntersectionObserver(startCounter, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});

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

// ✅ Quote Alert Button (Login Required Popup)
document.querySelectorAll(".quote-btn").forEach(button => {
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

// ✅ Read More Modal (Fixed Centering)
function openReadMoreModal(event) {
    event.preventDefault();
    const modal = document.getElementById("readMoreModal");
    modal.style.display = "flex";
}

// ✅ Close Modal Function
function closeReadMoreModal() {
    document.getElementById("readMoreModal").style.display = "none";
}

// ✅ Close modal when clicking outside the modal content
window.addEventListener("click", function (event) {
    const modal = document.getElementById("readMoreModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// ✅ Ensure Modal is Hidden on Load (Prevents Refresh Issue)
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("readMoreModal").style.display = "none";
});
