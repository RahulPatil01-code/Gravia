document.addEventListener("DOMContentLoaded", function() {
    let prices = document.querySelectorAll(".price"); 
    let totalPrice = 0;
    let totalItems = prices.length;

    prices.forEach(price => {
        let priceValue = parseInt(price.textContent.replace("Estimated Price: ₹", "").trim());
        if (!isNaN(priceValue)) {
            totalPrice += priceValue;
        }
    });

    document.getElementById("total-items").textContent = totalItems;
    document.getElementById("total-price").textContent = totalPrice + " (Estimated)";
});
