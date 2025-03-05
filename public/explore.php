<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Gravia | Discover Exquisite Stone Designs</title>

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
    <link rel="stylesheet" href="../css/explore.css">
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../Index.php">Gravia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./explore.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="./blog.php">Blog's</a></li>
                    <li class="nav-item"><a class="nav-link" href="./About.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./login">Login</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay"> </div><!-- Dark overlay for better text visibility -->
    <div class="hero-content">
        <h1 id="hero-title " >Luxurious Marble Designs</h1>
        <p id="hero-text">Discover the timeless beauty of natural stone.</p>
    </div>
</section>




<section class="container my-5 position-relative">
    <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
            <h5 class="text-uppercase text-muted">Timeless Italian Elegance</h5>
            <h2 class="fw-bold">
                Beauty of <span class="highlight">Carrara Marble</span>
            </h2>
            <p>
                Carrara Marble, sourced from the world-famous quarries in Italy, is a symbol of luxury and elegance. Its soft white background and delicate gray veining create a sophisticated and timeless look, making it a top choice for architects and designers worldwide.
            </p>
            <p>
                Used in some of the most iconic sculptures and architecture, Carrara Marble is perfect for countertops, flooring, and walls, adding a touch of classic refinement to any space.
            </p>
            
            <a href="#" class="btn btn-warning px-4 py-2 read-more-link" 
                data-title="Carrara Marble - Elegance Redefined" 
                data-image="../src/BIANCO-CARRARA.jpg"
                data-text="Carrara Marble has been quarried since Roman times and has been used in some of the most iconic sculptures and architecture. Michelangelo’s famous statue of David was carved from a single block of Carrara Marble. Known for its durability and smooth texture, it is perfect for sculptures, flooring, countertops, and walls. The subtle gray veining varies in intensity, giving each slab a unique character. Used in high-end residential and commercial interiors, it remains one of the most sought-after marbles in the world.">
                Read More 
            </a>
        </div>

        <!-- Right Side: Image -->
        <div class="col-lg-6">
            <img src="../src/BIANCO-CARRARA.jpg" alt="Carrara Marble" class="img-fluid rounded" loading="lazy">
        </div>
    </div>
</section>

        <div id="exploreModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 id="modal-title"></h2>
                <img id="modal-image" class="modal-image" src="" alt="">
                <p id="modal-text"></p>
            </div>
        </div>





<section class="container my-5 position-relative">
    <div class="row align-items-center">
        <!-- Right Side: Image -->
        <div class="col-lg-6">
            <img src="../src/CALACATTA-TORO.jpg" alt="Calacatta Marble" class="img-fluid rounded" loading="lazy">
        </div>

        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
            <h5 class="text-uppercase text-muted">Luxury at Its Finest</h5>
            <h2 class="fw-bold">
                Elegance of <span class="highlight">Calacatta Marble</span>
            </h2>
            <p>
                Calacatta Marble is one of the most sought-after marbles, known for its striking white background and bold, dramatic veining. It offers a luxurious and high-end look, making it a favorite for upscale interiors and statement pieces.
            </p>
            <p>
                This Italian masterpiece is perfect for countertops, floors, and wall applications, adding an unparalleled touch of opulence and sophistication to any space.
            </p>
                <a href="#"  class="btn btn-warning px-4 py-2 read-more-link" 
                data-title="Calacatta Marble - Luxury Beyond Compare" 
                data-image="../src/CALACATTA-TORO.jpg"
                data-text="Calacatta Marble is a rare and luxurious stone with bold, high-contrast veining. Found in the same region as Carrara Marble, it features a whiter background with striking gray and gold veins. Unlike Carrara, Calacatta is rarer and often considered a premium choice for extravagant interiors. It is widely used in grand foyers, high-end countertops, feature walls, and flooring. Due to its distinctive patterns, no two slabs are alike, making it a unique and sought-after material for sophisticated spaces.">
                Read More 
            </a>
        </div>
    </div>
</section>


<section class="container my-5 position-relative">
    <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
            <h5 class="text-uppercase text-muted">Timeless Sophistication</h5>
            <h2 class="fw-bold">
                The Warmth of <span class="highlight">Emperador Marble</span>
            </h2>
            <p>
                Emperador Marble is a rich, warm-toned marble known for its deep brown hues and intricate veining. This Spanish marble adds a touch of elegance and sophistication to interiors, making it a perfect choice for luxurious settings.
            </p>
            <p>
                Its unique color palette blends beautifully with both classic and modern designs, making it ideal for countertops, flooring, and decorative features that exude warmth and refinement.
            </p>
            <a href="#" 
               class="btn btn-warning px-4 py-2 read-more-link" 
               data-title="Warmth of Emperador Marble" 
               data-image="../src/COFFEE-EMPERADOR.jpg"
               data-text="Emperador Marble is a stunning natural stone sourced from Spain, featuring a deep brown base with interwoven white and golden veins. It is highly valued for its rich, warm tones that add sophistication to any space. Unlike white marbles, Emperador offers a more dramatic and earthy aesthetic, making it ideal for traditional and contemporary interiors. It is commonly used in luxurious bathroom vanities, fireplace surrounds, flooring, and wall cladding. The natural variations in pattern and color make every Emperador Marble installation unique."
              >Read More
            </a>
        </div>

        <!-- Right Side: Image -->
        <div class="col-lg-6">
            <img src="../src/COFFEE-EMPERADOR.jpg" alt="Emperador Marble" class="img-fluid rounded" loading="lazy">
        </div>
    </div>
</section>

      
    <div class="container text-center mt-4">
        <h2 class="collection-title">Varieties of marble</h2>

        <div class="row mt-4">
    
            <div class="col-md-3">
                <div class="card">
                    <img src="../src/Nero-Marquina-Marble.jpeg" alt="Nero Marquina Marble" class="img-fluid">
                    <div class="card-content">
                        <h3>Nero Marquina</h3>
                        <p>Deep black marble with bold white veins, exuding elegance and luxury.</p>
                        <a href="login.php" class="quote-btn">Discover</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img src="../src/CREMA-MARFIL.jpg" alt="Crema Marfil Marble" class="img-fluid">
                    <div class="card-content">
                        <h3>Crema Marfil</h3>
                        <p>Warm beige marble with fine veins, perfect for classic interiors.</p>
                        <a href="login.php" class="quote-btn">Discover</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img src="../src/Tropical-Rainforest-Green.jpg" alt="Rainforest Marble" class="img-fluid">
                    <div class="card-content">
                        <h3>Rainforest</h3>
                        <p>Striking green or brown marble with bold, nature-inspired veining.</p>
                        <a href="login.php" class="quote-btn">Discover</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img src="../src/ONYX-(-GOLDEN-BROWN-).jpg" alt="Onyx Marble" class="img-fluid">
                    <div class="card-content">
                        <h3>Onyx Marble</h3>
                        <p>Exotic translucent marble with vibrant hues and a glowing effect.</p>
                        <a href="login.php" class="quote-btn">Discover</a>
                    </div>
                </div>
            </div>
            
            

        </div>
        <div class="text-center mt-4">
            <a href="collection.php" class="explore-btn">Explore Collection</a>
        </div>

        </div>
    </div>

      <!-- Explore More Section -->
      <section class="text-center py-5 bg-white">
        <h2 class="fw-bold">Need Help Choosing the Perfect Marble?</h2>
        <p class="text-muted">Our experts are here to guide you. Contact us to find the ideal marble for your project.</p>
        <a href="./contact.php" class="btn btn-dark mt-3">Get in Touch</a>
    </section>
    
    <!-- Footer -->
    <footer class="custom-footer">
    <div class="container">
        <div class="row">
            <!-- Branding and Social Links -->
            <div class="col-md-3 footer-brand">
                <a class="navbar-brand fw-bold" href="../Index.php">Gravia</a>
                <div class="social-links mt-2">
                    <a href="#" class="footer-link me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer-link me-3"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="footer-link me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer-link"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-md-4 footer-column">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="../Index.php" class="footer-link">Home</a></li>
                            <li><a href="./explore.php" class="footer-link">Products</a></li>
                            <li><a href="../index.php#Project-section" class="footer-link">Projects</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="./about.php" class="footer-link">About Us</a></li>
                            <li><a href="./contact.php" class="footer-link">Contact</a></li>
                            <li><a href="" class="footer-link">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div class="col-md-5 col-12 newsletter">
                <form>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control newsletter-input" placeholder="Your email address">
                        <button class="btn newsletter-btn" type="submit">Subscribe</button>
                    </div>
                    <div class="newsletter-note text-center text-md-start">
                        By subscribing to our newsletter you agree to our <a href="#">Privacy Policy</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/explore.js"></script>

</body>
</html>
