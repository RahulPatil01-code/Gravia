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
    <link rel="stylesheet" href="../css/catalog.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
</head>
<body>

<?php include '../includes/header.php'; ?>
    
    <section class="hero">
    
        <div class="hero-content">
            <div class="hero-overlay"> <!-- Dark overlay for better text visibility -->
            <h1 id="hero-title" >Elevate Your Space with Elegance</h1>
            <p id="hero-text">Discover the artistry of premium marble.</p>
        </div>
        </div>
    </section>

    <!-- Sort section  -->
    

    <!-- Gallery section -->
    <section id="gallery" class="gallery py-5 text-center bg-white">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4">Crafted by Nature, Perfected for You</h2>
                    <div class="sort-container">
                        <label for="sort">Sort by:</label>
                        <select id="sort" onchange="sortProducts()">
                            <option value="default">Default</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="name-asc">Name: A to Z</option>
                            <option value="name-desc">Name: Z to A</option>
                        </select>
                    </div>
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
                            <a href="login.php" class="quote-btn">View detail's</a>
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
        </div>
</section>      

<!-- Pagination HTML -->
<nav aria-label="Page navigation">
  <ul class="pagination-container">
    <li class="pagination-item">
      <a href="#" class="pagination-link pagination-arrow" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="pagination-item"><a href="#" class="pagination-link active">1</a></li>
    <li class="pagination-item"><a href="#" class="pagination-link">2</a></li>
    <li class="pagination-item"><a href="#" class="pagination-link">3</a></li>
    <li class="pagination-item pagination-ellipsis"><span>...</span></li>
    <li class="pagination-item"><a href="#" class="pagination-link">10</a></li>
    <li class="pagination-item">
      <a href="#" class="pagination-link pagination-arrow" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php include '../includes/footer.php'; ?>


            <!-- Bootstrap Bundle with Popper.js -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                <script src="../js/catalog.js"></script>


</body>
</head>