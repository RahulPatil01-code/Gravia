


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
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
</head>
<body>

<?php include '../includes/header.php'; ?>

     <!-- Product Section -->
     <div class="container mt-5">
    <div class="row">
        <!-- Product Image Section (Fixed) -->
        <div class="col-md-6 position-relative image-section">
            <!-- Main Image -->
            <div class="main-image-container">
                <img id="mainImage" src="../src/italian.jpg" class="main-img" alt="Product Image">
            </div>
            
            <!-- Wishlist Icon -->
            <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                <i class="fa fa-heart"></i>
            </div>
            
            <!-- Thumbnail Images -->
            <div class="d-flex mt-3">
                <img src="../src/italian.jpg" class="thumb active" onclick="swapImage(this)">
                <img src="../src/marble.jpg" class="thumb" onclick="swapImage(this)">
                <img src="../src/granite.jpg" class="thumb" onclick="swapImage(this)">
            </div>    
        </div>

        <!-- Product Details Section (Scrollable) -->
        <div class="col-md-6 details-section">
            <div class="details-container">
                <h2>Italian Marble Slab</h2>
                <p class="text-muted">Category: Premium Marble</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque purus ut orci dapibus.</p>
                
                <!-- Price Range per sq. ft. -->
                <p class="text-muted fw-bold">Price Range: ₹50 - ₹60 per sq. ft.</p>
                
                <!-- Dimensions Selection -->
                <div class="d-flex align-items-center mb-3">
                    <label class="me-2">Length (in ft):</label>
                    <input type="number" class="form-control w-25 me-3" id="length" min="1" placeholder="Enter length">
                    
                    <label class="me-2">Width (in ft):</label>
                    <input type="number" class="form-control w-25" id="width" min="1" placeholder="Enter width">
                </div>
                
                <!-- Price & Area Display -->
                <h4 class="text-estimate">Estimated Price: <span id="price">Select dimensions</span></h4>
                <p class="text-muted">Total Area: <span id="area">0</span> sq. ft.</p>
                
                <!-- Buttons -->
                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-primary flex-grow-1" id="addToCart">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                    <a href="#" class="btn btn-success flex-grow-1" id="buyNow">
                        <i class="fas fa-bolt"></i> Buy Now
                    </a>
                </div>
                
                <!-- Additional Details (Scrollable) -->
                <div class="additional-details mt-4">
                    <h5>Highlights</h5>
                    <ul class="text-muted">
                        <li>Premium Italian Marble</li>
                        <li>Polished Finish with Natural Veins</li>
                        <li>Durable and Scratch-Resistant</li>
                        <li>Ideal for Flooring & Countertops</li>
                    </ul>
                    
                    <h5>Seller</h5>
                    <p class="text-primary fw-bold">Marble World ⭐ 4.5</p>
                    <ul class="text-muted">
                        <li>10-Year Warranty on Manufacturing Defects</li>
                        <li>GST Invoice Available</li>
                    </ul>
                    
                    <h5>Description</h5>
                    <p class="text-muted">
                        Italian Marble Slab – Premium quality with a polished surface, perfect for elegant interiors. 
                        Adds a luxurious touch to your home with its unique veining and high durability.
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/product.js"></script>

</body>
</html>
