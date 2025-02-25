
// Initialize AOS Animation
AOS.init();

// Swiper Slider - Auto Slides & Stays in Frame
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: { 
        delay: 3000,   // Change slide in 3 seconds
        disableOnInteraction: false  // Keeps auto-slide working even after user interaction
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Happy client's counting

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");
    const section = document.querySelector(".stats-section");
    let started = false; // To prevent multiple triggers

    function startCounter() {
        counters.forEach((counter) => {
            const target = +counter.getAttribute("data-target");
            let count = 0;
            let increment = target / 100;

            const updateCounter = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = Math.floor(count);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    }

    // Trigger animation when section is visible
    function onScroll() {
        const sectionPos = section.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;

        if (!started && sectionPos < screenHeight * 0.8) {
            started = true;
            startCounter();
        }
    }

    window.addEventListener("scroll", onScroll);
});



// Client and awards count

document.addEventListener("DOMContentLoaded", function () {
    function startCounter(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute("data-target");
                counter.innerText = "0"; // Reset to 0 when re-entering

                let count = 0;
                const speed = target / 200; // Adjust speed here

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

    counters.forEach((counter) => {
        observer.observe(counter);
    });
});

// Feedback section

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

    // Initialize first testimonial as active
    testimonials[index].classList.add("active");

    // Change testimonial every 4 seconds
    setInterval(showNextTestimonial, 4000);
});

