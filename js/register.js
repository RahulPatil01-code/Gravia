 // Animation for the arrow in the register button
 document.addEventListener('DOMContentLoaded', function() {
    const registerBtn = document.querySelector('.register-btn');
    const arrow = document.querySelector('.register-btn .arrow');
    
    // Add pulse animation to the arrow on page load
    setTimeout(() => {
        arrow.style.transform = 'translateX(5px)';
        setTimeout(() => {
            arrow.style.transform = 'translateX(0)';
        }, 500);
    }, 1000);
    
    // Add event listeners for button hover
    registerBtn.addEventListener('mouseenter', function() {
        arrow.style.transform = 'translateX(5px)';
    });
    
    registerBtn.addEventListener('mouseleave', function() {
        arrow.style.transform = 'translateX(0)';
    });
    
    // Add form submission handler
    document.getElementById('registration-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Form submitted successfully!');
    });
});