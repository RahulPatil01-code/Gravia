<?php
include '../../config/db_connect.php'; // Include database connection



// Fetch product details from the database
$product_id = $_GET['id']; // Assuming product ID is passed via GET request
$conn = new mysqli("localhost", "root", "", "gravia");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch main product details
$product_query = $conn->prepare("SELECT * FROM products WHERE id = ?");
$product_query->bind_param("i", $product_id);
$product_query->execute();
$product = $product_query->get_result()->fetch_assoc();

// Fetch additional images from product_images table
$image_query = $conn->prepare("SELECT image_url FROM product_images WHERE product_id = ?");
$image_query->bind_param("i", $product_id);
$image_query->execute();
$image_result = $image_query->get_result();

$images = [];
while ($row = $image_result->fetch_assoc()) {
    $images[] = $row['image_url'];
}


// var_dump($product['image_main']);
// var_dump($images);

mysqli_close($conn);
?>


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

<?php include_once '../includes/header.php'; ?>

        <!-- Product Section -->
<div class="container mt-5">
    <div class="row">
        <!-- Product Image Section (Fixed) -->
        <div class="col-md-6 position-relative image-section">
            <!-- Main Image -->
            <div class="main-image-container">
                <img id="mainImage" src="<?= $product['image_main'] ?>" class="main-img" alt="<?= $product['name'] ?>">

            </div>

            <!-- Wishlist Icon -->
            <div class="wishlist-icon" onclick="toggleWishlist(this, '<?= $product['name'] ?>')">
                <i class="fa fa-heart"></i>
            </div>

            <!-- Thumbnail Images -->
            <div class="d-flex mt-3">
                <img src="<?= $product['image_main'] ?>" class="thumb active" onclick="swapImage(this)">
                <?php foreach ($images as $image) : ?>
                    <img src="<?= $image ?>" class="thumb" onclick="swapImage(this)">
                <?php endforeach; ?>
            </div>    
        </div>

        <!-- Product Details Section (Scrollable) -->
        <div class="col-md-6 details-section">
            <div class="details-container">
                <h2><?= $product['name'] ?></h2>
                <p class="text-muted">Category: <?= $product['category'] ?></p>
                <p><?= $product['short_desc'] ?></p>

                <!-- Price Range per sq. ft. -->
                <p class="text-muted fw-bold">Price Range: ₹<?= $product['price_min'] ?> - ₹<?= $product['price_max'] ?> per sq. ft.</p>

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
                        <?= nl2br($product['highlights']) ?>
                    </ul>

                    <h5>Seller</h5>
                    <p class="text-primary fw-bold"><?= $product['seller_name'] ?> ⭐ <?= $product['seller_rating'] ?></p>
                    <ul class="text-muted">
                        <?php if ($product['warranty']) : ?>
                            <li>Warranty: <?= $product['warranty'] ?></li>
                        <?php endif; ?>
                        <?php if ($product['gst_invoice']) : ?>
                            <li>GST Invoice Available</li>
                        <?php endif; ?>
                    </ul>

                    <h5>Description</h5>
                    <p class="text-muted"><?= $product['detailed_desc'] ?></p>
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
