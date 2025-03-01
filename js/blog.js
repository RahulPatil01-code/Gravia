AOS.init();


function openModal(title, image, content) {
    document.getElementById("modal-title").innerText = title;
    document.getElementById("modal-image").src = image;
    document.getElementById("modal-content").innerHTML = content;
    document.getElementById("categoryModal").style.display = "block";
}

function closeModal() {
    document.getElementById("categoryModal").style.display = "none";
}
AOS.init();

function openModal(title, image, content) {
    document.getElementById("modal-title").innerText = title;
    document.getElementById("modal-image").src = image;
    document.getElementById("modal-content").innerHTML = content;
    document.getElementById("categoryModal").style.display = "flex"; // Center modal properly
}

function closeModal() {
    document.getElementById("categoryModal").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
    // Ensure modals are hidden on page load
    document.querySelectorAll(".modal").forEach(modal => modal.style.display = "none");

    // Handle category click event
    document.querySelectorAll(".category-link").forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            
            const category = this.getAttribute("data-category");
            const modal = document.getElementById(`${category}-modal`);
            
            if (modal) {
                modal.style.display = "flex";
            }
        });
    });

    // Handle modal close button
    document.querySelectorAll(".close").forEach(button => {
        button.addEventListener("click", function () {
            this.closest(".modal").style.display = "none";
        });
    });

    // Close modal when clicking outside content
    window.addEventListener("click", function (event) {
        document.querySelectorAll(".modal").forEach(modal => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const modals = document.querySelectorAll(".modal");
    
    // Make sure modals are hidden on page load
    modals.forEach(modal => modal.style.display = "none");

    // Get all category links
    const categoryLinks = document.querySelectorAll(".category-link");

    categoryLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            
            // Get category from data attribute
            const category = this.getAttribute("data-category");
            
            // Find the corresponding modal
            const modal = document.getElementById(`${category}-modal`);
            
            if (modal) {
                modal.style.display = "flex"; // Show the modal
            }
        });
    });

    // Close Modal when clicking the close button
    const closeButtons = document.querySelectorAll(".close");
    closeButtons.forEach(button => {
        button.addEventListener("click", function () {
            this.parentElement.parentElement.style.display = "none";
        });
    });

    // Close modal when clicking outside the modal content
    window.addEventListener("click", function (event) {
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
});


// Ensure modal is hidden on page load
document.addEventListener("DOMContentLoaded", function () {
    const blogModal = document.getElementById("blogModal");
    blogModal.style.display = "none";
});

// Get modal and elements inside
const blogModal = document.getElementById("blogModal");
const modalTitle = document.getElementById("blogModalTitle");
const modalContent = document.getElementById("blogModalContent");
const openModalBtns = document.querySelectorAll(".blog-read-more");
const closeModalBtn = document.querySelector(".blog-close");

// Open modal dynamically based on clicked button
openModalBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent link jump
        
        // Get data from button attributes
        const title = btn.getAttribute("data-title");
        const content = btn.getAttribute("data-content");

        // Insert dynamic content into modal
        modalTitle.textContent = title;
        modalContent.textContent = content;

        // Show modal
        blogModal.style.display = "flex";
    });
});

// Close modal when close button is clicked
closeModalBtn.addEventListener("click", () => {
    blogModal.style.display = "none";
});

// Close modal when clicking outside the modal
window.addEventListener("click", (e) => {
    if (e.target === blogModal) {
        blogModal.style.display = "none";
    }
});



// Article PopUp read more

function openArticleModal(element) {
    event.preventDefault(); // Stops the page from jumping to the top

    var modal = document.getElementById("articleReadMoreModal");

    // Get data from the clicked "Read More" button
    var title = element.getAttribute("data-title");
    var image = element.getAttribute("data-image");
    var date = element.getAttribute("data-date");
    var content = element.getAttribute("data-content");
    var tags = element.getAttribute("data-tags").split(',');

    // Set the modal content
    document.getElementById("articleTitle").textContent = title;
    document.getElementById("articleImage").src = image;
    document.getElementById("articleImage").alt = title;
    document.getElementById("articleDate").textContent = date;
    document.getElementById("articleContent").textContent = content;

    // Add tags dynamically
    var tagContainer = document.getElementById("articleTags");
    tagContainer.innerHTML = ""; // Clear previous tags
    tags.forEach(tag => {
        let span = document.createElement("span");
        span.classList.add("blog-tag");
        span.textContent = tag;
        tagContainer.appendChild(span);
    });

    // Show the modal
    modal.style.display = "flex";
}

// load more articles alert
document.getElementById("loadMoreBtn").addEventListener("click", function () {
    alert("No more articles available! Stay tuned for upcoming posts. 😊");
});

// Subscribe done
document.getElementById("subscribeBtn").addEventListener("click", function() {
    alert("✅ Thank you for subscribing to our blog!");
});

