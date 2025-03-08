<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /login.php"); // Redirect to login if session is not set
    exit();
}
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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    
</head>
<body>

<?php include './includes/header.php'; ?>
    
    <section class="hero">
    
        <div class="hero-content">
            <div class="hero-overlay"> <!-- Dark overlay for better text visibility -->
            <h1 id="hero-title" >Welcome to Our Exclusive Collection</h1>
            <p id="hero-text">Find the best marble products curated just for you.</p>
        </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories py-5">
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Shop by Category</h2>
        <div class="row">
            <!-- Mobile view (stacked) -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card category-card">
                    <img src="./src/marble.jpg" class="card-img-top" alt="Marble">
                    <div class="card-body text-center">
                        <h3>Elegant Stone</h3>
                        <p>Elegant and durable natural stone for flooring and decor.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card category-card">
                    <img src="./src/granite.jpg" class="card-img-top" alt="Granite">
                    <div class="card-body text-center">
                        <h3>Timeless Strength</h3>
                        <p>Strong and stylish granite for long-lasting surfaces.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card category-card">
                    <img src="./src/tiles.jpg" class="card-img-top" alt="Tiles">
                    <div class="card-body text-center">
                        <h3>Stylish Surfaces</h3>
                        <p>Modern and stylish tiles for elegant interiors.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- Featured Products -->
 <section class="featured-products bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Trending Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="../src/italian.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h3>Marble A</h3>
                            <p>$100 per sq.ft</p>
                            <a href="#" class="btn btn-success">View detail's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="images/product2.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h3>Marble B</h3>
                            <p>$120 per sq.ft</p>
                            <a href="#" class="btn btn-success">View detail's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="images/product3.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body text-center">
                            <h3>Marble C</h3>
                            <p>$150 per sq.ft</p>
                            <a href="#" class="btn btn-success">View detail's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="images/product4.jpg" class="card-img-top" alt="Product 4">
                        <div class="card-body text-center">
                            <h3>Marble D</h3>
                            <p>$180 per sq.ft</p>
                            <a href="#" class="btn btn-success">View detail's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wishlist Alert  -->
    <div id="wishlist-toast" class="toast">
        <span class="checkmark">✔</span> Added to your Wishlist
    </div>



        <!-- Gallery section -->
        <section id="gallery" class="gallery py-5 text-center bg-white">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4">A Symphony of Marble</h2>
            <div class="row">
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/BIANCO-CARRARA.jpg" alt="Carrara Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Carrara Marble</h3>
                            <p>Iconic Italian marble with soft gray veins, perfect for luxury interiors.</p>
                            <a href="./public/product.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/GREY-EMPERADOR.jpg" alt="Nero Marquina" class="img-fluid">
                        <div class="card-content">
                            <h3>Nero Marquina</h3>
                            <p>Deep black marble with striking white veins, a bold and elegant choice.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/verde-alpi.jpg" alt="Verde Alpi" class="img-fluid">
                        <div class="card-content">
                            <h3>Verde Alpi</h3>
                            <p>Rich green marble with natural patterns, bringing nature indoors.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/CALACATTA_GOLD_A.jpg" alt="Calacatta Gold" class="img-fluid">
                        <div class="card-content">
                            <h3>Calacatta Gold</h3>
                            <p>Luxurious white marble with golden veins, a symbol of opulence.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/STATUARIO-VENATINO.jpg" alt="Statuario Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Statuario Marble</h3>
                            <p>Premium white marble with bold veining, ideal for statement designs.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/GREY-EMPERADOR.jpg" alt="Emperador Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Emperador </h3>
                            <p>Rich brown marble with white veining, perfect for warm interiors.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/Azul_Macaubas.jpeg" alt="Azul Macaubas" class="img-fluid">
                        <div class="card-content">
                            <h3>Azul Macaubas</h3>
                            <p>Exotic blue quartzite marble, adding a cool and unique touch.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card">
                    <div class="wishlist-icon" onclick="toggleWishlist(this, 'Marble A')">
                        <i class="fa fa-heart"></i>
                    </div>
                        <img src="./src/levanto_red.jpg" alt="Rosso Levanto" class="img-fluid">
                        <div class="card-content">
                            <h3>Rosso Levanto</h3>
                            <p>Deep red marble with white veins, adding drama and sophistication.</p>
                            <a href="login.php" class="quote-btn">View detail's</a>
                        </div>
                    </div>
                </div>
                
                

            </div>
            <div class="text-center mt-4">
                <a href="./public/explore.php" class="explore-btn">Load more products</a>
            </div>

            
        </div>
    </section>

    
    
    
   
    
    <!-- Testimonials -->
        <section class="testimonials bg-light py-5">
            <div class="container text-center">
                <h2 data-aos="fade-up" class="mb-4 fw-bold">What Our Clients Say</h2>
                <div class="testimonial-slider">
                    <div class="testimonial-box active">
                        <p>“Gravia's marble transformed my home! High quality and amazing service.”</p>
                        <h5>- John Doe</h5>
                    </div>
                    <div class="testimonial-box">
                        <p>“Best experience ever! The custom installation was perfect.”</p>
                        <h5>- Jane Smith</h5>
                    </div>
                    <div class="testimonial-box">
                        <p>“Their luxury marble collection is stunning. Highly recommended!”</p>
                        <h5>- Mark Wilson</h5>
                    </div>
                </div>
            </div>
        </section>

<?php include './includes/footer.php'; ?>


            <!-- Bootstrap Bundle with Popper.js -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                <script src="js/scripts.js"></script>


</body>
</head>