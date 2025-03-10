function removeItem(button) {
    const item = button.parentElement;
    item.remove(); // Remove item from DOM
    
    // Update wishlist count
    let count = document.getElementById("wishlist-count");
    count.textContent = document.querySelectorAll(".wishlist-item").length;
}
