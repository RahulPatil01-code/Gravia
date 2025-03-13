<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravia Home | Elevate Your Space</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@300;400;500&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animations & Swiper -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
</head>
<body>

<?php include_once '../includes/header.php'; ?>


<div class="wishlist-container">
        <h2>My Cart (3)</h2>
        <div class="wishlist-item">
            <img src="marble.jpg" alt="Premium Italian Marble">
            <a href="product.php" class="wishlist-link">
                <div class="wishlist-details">
                        <h3>Premium Italian Marble</h3>
                        <p class="description">Elegant and durable marble with a glossy finish.Elegant and durable marble with a glossy finishElegant and durable marble with a glossy finishElegant and durable marble with a glossy finishElegant and durable marble with a glossy finish</p>
                        <p class="dimensions">Size: 120cm x 60cm</p>
                        <p class="price">Estimated Price: ₹4,500</p>
                </div>
            </a>
                <div class="wishlist-actions">
                        <button class="remove-btn">🗑</button>
                        <button class="checkout-btn" onclick="window.location.href='checkout.php'">🛒 Checkout</button>
                </div>
        </div>

        <div class="wishlist-item">
            <img src="marble.jpg" alt="Premium Italian Marble">
            <a href="product.php" class="wishlist-link">
                    <div class="wishlist-details">
                        <h3>Premium Italian Marble</h3>
                        <p class="description">Elegant and durable marble with a glossy finish.Elegant and durable marble with a glossy finishElegant and durable marble with a glossy finishElegant and durable marble with a glossy finishElegant and durable marble with a glossy finish</p>
                        <p class="dimensions">Size: 120cm x 60cm</p>
                        <p class="price">Estimated Price: ₹4,500</p>
                    </div>
                </a>
                    <div class="wishlist-actions">
                        <button class="remove-btn">🗑</button>
                        <button class="checkout-btn" onclick="window.location.href='checkout.php'">🛒 Checkout</button>
                    </div>
        </div>
        <!-- Order Now Container -->
        <div class="order-now-container">
            <div>
                <p><strong>Total Items:</strong> <span id="total-items">2</span></p>
                <p><strong>Estimated Total Price:</strong> ₹<span id="total-price">9000</span> (Final price may vary)</p>
            </div>
            <button class="order-now-btn" onclick="window.location.href='checkout.php'">🛒 Proceed to Checkout</button>
        </div>


    </div>



<?php include '../includes/footer.php'; ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/cart.js"></script>

</body>
</html>