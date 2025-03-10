<!DOCTYPE html>
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

    <!-- Fontawesome for icon's -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <nav class="top-navbar container-fluid px-md-5 px-3">
        <a class="navbar-brand fw-bold" href="/Gravia/customer/Index.php">Gravia</a>
        
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search...">
        </div>

        <div class="nav-icons">
            <a href="/Gravia/customer/public/wishlist.php"><i class="fas fa-heart"></i></a>
            <a href="/Gravia/customer/public/cart.php"><i class="fas fa-shopping-cart"></i></a>
            <a href="/Gravia/customer/public/profile.php"><i class="fas fa-user"></i></a>
            <a href="/Gravia/public/logout.php"><i class="fa-solid fa-sign-out-alt"></i></a>
        </div>
        
        <div class="mobile-actions">
            <button class="mobile-search-toggle" id="mobileSearchToggle">
                <i class="fas fa-search"></i>
            </button>
            <button class="mobile-menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvas">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Search Bar (Hidden by default) -->
    <div class="mobile-search-container d-none" id="mobileSearchContainer">
        <div class="container py-2">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </div>
    
    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-end mobile-offcanvas" tabindex="-1" id="mobileOffcanvas">
        <div class="offcanvas-header mobile-offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mobile-nav-group">
                <h6 class="mobile-nav-group-title">Marble Types</h6>
                <ul class="mobile-nav-links">
                    <li>
                        <a href="/Gravia/customer/public/catalog.php" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#italianMarble">
                            Italian Marble
                        </a>
                        <ul id="italianMarble" class="collapse">
                            <li><a href="/Gravia/customer/public/catalog.php">Statuario</a></li>
                            <li><a href="#">Carrara</a></li>
                            <li><a href="#">Calacatta</a></li>
                            <li><a href="#">Botticino</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#indianMarble">
                            Indian Marble
                        </a>
                        <ul id="indianMarble" class="collapse">
                            <li><a href="#">Makrana</a></li>
                            <li><a href="#">Ambaji</a></li>
                            <li><a href="#">Katni</a></li>
                            <li><a href="#">Jaisalmer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#spanishMarble">
                            Spanish Marble
                        </a>
                        <ul id="spanishMarble" class="collapse">
                            <li><a href="#">Creama Marfil</a></li>
                            <li><a href="#">Emperador Dark</a></li>
                            <li><a href="#">Nero Marquina</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#turkishMarble">
                            Turkish Marble
                        </a>
                        <ul id="turkishMarble" class="collapse">
                            <li><a href="#">Travertine</a></li>
                            <li><a href="#">Afyon White</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#otherpopularMarble">
                            Other Popular Marble
                        </a>
                        <ul id="otherpopularMarble" class="collapse">
                            <li><a href="#">Onyx Marble</a></li>
                            <li><a href="#">Green Marble</a></li>
                            <li><a href="#">Black Galaxy Marble</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#tiles">
                            Tiles
                        </a>
                        <ul id="tiles" class="collapse">
                            <li><a href="#">Floor Tiles</a></li>
                            <li><a href="#">Wall Tiles</a></li>
                            <li><a href="#">Bathroom Tiles</a></li>
                            <li><a href="#">Kitchen Tiles</a></li>
                            <li><a href="#">Outdoor Tiles</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#granite">
                            Granite
                        </a>
                        <ul id="granite" class="collapse">
                            <li><a href="#">Black Granite</a></li>
                            <li><a href="#">White Granite</a></li>
                            <li><a href="#">Gray Granite</a></li>
                            <li><a href="#">Brown Granite</a></li>
                            <li><a href="#">Blue Granite</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="mobile-nav-group">
                <h6 class="mobile-nav-group-title">Quick Links</h6>
                <ul class="mobile-nav-links">
                    <li><a href="#"><i class="fas fa-heart me-2"></i>Wishlist</a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart me-2"></i>Cart</a></li>
                    <li><a href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-sign-out-alt me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <nav class="bottom-navbar">
        <div class="container d-flex justify-content-center">
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/Gravia/customer/public/catalog.php" role="button">Italian Marble</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Gravia/customer/public/catalog.php">Statuario</a></li>
                        <li><a class="dropdown-item" href="#">Carrara</a></li>
                        <li><a class="dropdown-item" href="#">Calacatta</a></li>
                        <li><a class="dropdown-item" href="#">Botticino</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Indian Marble</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Makrana</a></li>
                        <li><a class="dropdown-item" href="#">Ambaji</a></li>
                        <li><a class="dropdown-item" href="#">Katni</a></li>
                        <li><a class="dropdown-item" href="#">Jaisalmer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Spanish Marble</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Crema Marfil</a></li>
                        <li><a class="dropdown-item" href="#">Emperador Dark</a></li>
                        <li><a class="dropdown-item" href="#">Nero Marquina</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Turkish Marble</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Travertine</a></li>
                        <li><a class="dropdown-item" href="#">Afyon White</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Other Popular Types</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Onyx Marble</a></li>
                        <li><a class="dropdown-item" href="#">Green Marble</a></li>
                        <li><a class="dropdown-item" href="#">Black Galaxy Marble</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Tiles</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Floor Tiles</a></li>
                        <li><a class="dropdown-item" href="#">Wall Tiles</a></li>
                        <li><a class="dropdown-item" href="#">Bathroom Tiles</a></li>
                        <li><a class="dropdown-item" href="#">Kitchen Tiles</a></li>
                        <li><a class="dropdown-item" href="#">Outdoor Tiles</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Granite</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Black Granite</a></li>
                        <li><a class="dropdown-item" href="#">White Granite</a></li>
                        <li><a class="dropdown-item" href="#">Gray Granite</a></li>
                        <li><a class="dropdown-item" href="#">Brown Granite</a></li>
                        <li><a class="dropdown-item" href="#">Blue Granite</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- JavaScript for mobile search toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchToggle = document.getElementById('mobileSearchToggle');
            const searchContainer = document.getElementById('mobileSearchContainer');
            
            if (searchToggle && searchContainer) {
                searchToggle.addEventListener('click', function() {
                    searchContainer.classList.toggle('d-none');
                });
            }
        });
    </script>

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>