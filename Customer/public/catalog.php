<?php
include '../../config/db_connect.php'; // Include database connection


// Connect to database
$conn = new mysqli("localhost", "root", "", "gravia");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

$delay = 70;

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
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
                        <div class="card">
                            <div class="wishlist-icon" onclick="toggleWishlist(this, '<?php echo $row['name']; ?>')">
                                <i class="fa fa-heart"></i>
                            </div>
                            <img src="<?php echo $row['image_main']; ?>" alt="<?php echo $row['name']; ?>" class="img-fluid">
                            <div class="card-content">
                                <h3><?php echo $row['name']; ?></h3>
                                <p><?php echo $row['short_desc']; ?></p>
                                <a href="product.php?id=<?= $row['id'] ?>" class="quote-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php 
             $delay += 50;
             } ?>

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