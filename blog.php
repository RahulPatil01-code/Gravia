<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravia Insights | Trends & Inspiration in Stone Design</title>

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
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="Index.php">Gravia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="explore.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog's</a></li>
                    <li class="nav-item"><a class="nav-link" href="About.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>


    
    <!-- Blog Hero Section -->
    <section class="blog-hero position-relative text-center text-white">
        <img src="./src/chat.jpg" class="img-fluid w-100 hero-img" alt="Blog Banner">
        <div class="hero-overlay">
            <h1 data-aos="fade-up" class="display-3 fw-bold custom-heading">Marble Design Trends</h1>  
            <p data-aos="fade-up" data-aos-delay="200" class="fs-4">Explore inspiring ideas, expert tips, and the latest innovations in marble design.</p>  
            
        </div>
    </section>

    <!-- Search Bar -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="search-container" data-aos="fade-up">
                    <input type="text" id="searchInput" class="search-input" placeholder="Search articles...">
                    <button class="search-btn" id="searchButton">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Article -->
    <section class="featured-article container my-5 py-3">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-warning text-dark mb-3">Featured</span>
                <h2 data-aos="fade-up">The Timeless Elegance of Italian Marble</h2>
                <p class="text-muted">Published on February 20, 2025 • By Marble Expert</p>
                <img src="src/ita.jpg" alt="Italian Marble" class="img-fluid rounded my-4" data-aos="zoom-in">
                <div class="text-start mt-4" data-aos="fade-up">
                    <div class="blog-tags">
                        <span class="blog-tag">#Italian</span>
                        <span class="blog-tag">#Marble</span>
                        <span class="blog-tag">#Design</span>
                        <span class="blog-tag">#Luxury</span>
                    </div>
                    <p class="lead">Italian marble has been the cornerstone of elegant architecture and interior design for centuries, bringing timeless beauty to spaces around the world.</p>
                    <p>The magnificence of Italian marble lies not just in its stunning appearance but also in its rich history and cultural significance...</p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        
                        <a href="#" class="btn btn-outline-warning blog-read-more" 
                            data-title="The Timeless Elegance of Italian Marble" 
                            data-content="For centuries, Italian marble has been synonymous with luxury, elegance, and superior craftsmanship. 
                            From the grand architecture of ancient Rome to modern-day high-end interiors, its beauty remains unmatched. 

                            One of the key reasons for its desirability is its durability and timeless appeal. Whether used in flooring, 
                            countertops, or decorative walls, Italian marble effortlessly elevates any space. 

                            Renowned varieties such as Carrara, Calacatta, and Statuario each offer unique veining and shades, making them 
                            favorites among designers and architects. 

                            Despite its premium cost, the investment in Italian marble pays off by adding both aesthetic and financial value 
                            to a property. It is not just a material; it is a statement of elegance that stands the test of time.">
                            Continue Reading
                        </a>

                     
                        <div class="blog-actions">
                            <button class="action-btn like-btn" data-post-id="featured">
                                <i class="far fa-heart"></i> <span class="like-count">124</span>
                            </button>
                            <button class="action-btn bookmark-btn" data-post-id="featured">
                                <i class="far fa-bookmark"></i> Save
                            </button>
                            <button class="action-btn share-btn" data-post-title="The Timeless Elegance of Italian Marble">
                                <i class="fas fa-share-alt"></i> Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="blogModal" class="blog-modal">
        <div class="blog-modal-content">
            <span class="blog-close">&times;</span>
            <h2 id="blogModalTitle"></h2>
            <p id="blogModalContent"></p>
        </div>
    </div>

    <!-- Blog Categories -->
    <section class="blog-categories py-5 bg-light">
        <div class="container text-center">
            <h2 data-aos="fade-up" class="mb-4">Explore By Category</h2>
            <div class="row justify-content-center">

                    <!-- Category Cards -->
                    <div class="row">
                        
                        <!-- Living Room -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in">
                            <div class="category-box" onclick="openModal('Living Room', 'src/modern-living-rooms.jpg', `
                                <p><strong>Marble in Living Rooms: A Statement of Luxury</strong></p>
                                <ul>
                                    <li><strong>Flooring Elegance:</strong> Marble floors add a grand and polished look, making any space appear more open and sophisticated.</li>
                                    <li><strong>Feature Walls:</strong> A marble-accented wall or fireplace can become the focal point of your living area.</li>
                                    <li><strong>Furniture Touch:</strong> Marble coffee tables, shelves, or side tables can seamlessly blend with modern or classic aesthetics.</li>
                                    <li><strong>Natural Cooling Effect:</strong> Keeps the space cooler in warmer climates, enhancing comfort.</li>
                                </ul>
                            `)">
                                <img src="src/modern-living-rooms.jpg" alt="Living Room" class="mb-3">
                                <h5>Living Room</h5>
                            </div>
                        </div>
                    
                        <!-- Kitchen -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in">
                            <div class="category-box" onclick="openModal('Kitchen', 'src/luxury-modular-kitchen.jpg', `
                                <p><strong>Marble in Kitchens: Where Elegance Meets Functionality</strong></p>
                                <ul>
                                    <li><strong>Timeless Countertops:</strong> Marble countertops are durable, heat-resistant, and perfect for baking.</li>
                                    <li><strong>Backsplashes:</strong> Adds a sleek and modern touch while being easy to clean.</li>
                                    <li><strong>Kitchen Islands:</strong> A stunning marble island can elevate the entire kitchen’s aesthetic.</li>
                                    <li><strong>Versatility:</strong> Available in various colors and veining patterns to match any kitchen theme.</li>
                                </ul>
                            `)">
                                <img src="src/luxury-modular-kitchen.jpg" alt="Kitchen" class="mb-3">
                                <h5>Kitchen</h5>
                            </div>
                        </div>
                    
                        <!-- Bathroom -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="category-box" onclick="openModal('Bathroom', 'src/bathroom.jpg', `
                                <p><strong>Transform Your Bathroom into a Spa-like Retreat</strong></p>
                                <ul>
                                    <li><strong>Luxurious Vanities:</strong> Marble vanities give a hotel-like luxury experience.</li>
                                    <li><strong>Shower Walls & Flooring:</strong> Water-resistant and easy to maintain, marble brings elegance to bathrooms.</li>
                                    <li><strong>Underfloor Heating:</strong> Works well with heated floors for a warm and cozy touch.</li>
                                    <li><strong>Classic & Modern Designs:</strong> Perfect for contemporary and vintage bathroom styles.</li>
                                </ul>
                            `)">
                                <img src="src/bathroom.jpg" alt="Bathroom" class="mb-3">
                                <h5>Bathroom</h5>
                            </div>
                        </div>
                    
                        <!-- Flooring -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="category-box" onclick="openModal('Flooring', 'src/flooring.jpg', `
                                <p><strong>Why Choose Marble Flooring?</strong></p>
                                <ul>
                                    <li><strong>Durability & Strength:</strong> Marble flooring lasts for decades when properly maintained.</li>
                                    <li><strong>Reflects Light:</strong> Brightens up any room, giving a spacious and airy feel.</li>
                                    <li><strong>Cool Underfoot:</strong> Naturally keeps spaces cool, making it perfect for warm climates.</li>
                                    <li><strong>Variety of Finishes:</strong> Polished for a glossy look, honed for a matte feel, or textured for grip.</li>
                                </ul>
                            `)">
                                <img src="src/flooring.jpg" alt="Flooring" class="mb-3">
                                <h5>Flooring</h5>
                            </div>
                        </div>
                    
                        <!-- Countertops -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="category-box" onclick="openModal('Countertops', 'src/countertop.jpg', `
                                <p><strong>Elevate Your Space with Marble Countertops</strong></p>
                                <ul>
                                    <li><strong>Heat & Scratch Resistant:</strong> Ideal for kitchen and bathroom counters.</li>
                                    <li><strong>Unique Veining:</strong> No two marble slabs are the same, giving you a one-of-a-kind design.</li>
                                    <li><strong>Value Addition:</strong> Increases home resale value due to its luxurious appeal.</li>
                                    <li><strong>Sealing for Longevity:</strong> Proper sealing helps maintain its natural shine and beauty.</li>
                                </ul>
                            `)">
                                <img src="src/countertop.jpg" alt="Countertops" class="mb-3">
                                <h5>Countertops</h5>
                            </div>
                        </div>
                    
                        <!-- Marble Care -->
                        <div class="col-lg-2 col-md-4 col-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                            <div class="category-box" onclick="openModal('Marble Care', 'src/care-marble.jpg', `
                                <p><strong>Marble Care: Keeping It Pristine</strong></p>
                                <ul>
                                    <li><strong>Sealing Matters:</strong> Protects marble from stains and moisture damage.</li>
                                    <li><strong>Cleaning Tips:</strong> Use pH-neutral cleaners to maintain shine and avoid damage.</li>
                                    <li><strong>Avoid Acidic Spills:</strong> Citrus, vinegar, and wine can etch marble surfaces.</li>
                                    <li><strong>Regular Maintenance:</strong> Simple daily cleaning and yearly sealing can keep marble looking new for decades.</li>
                                </ul>
                            `)">
                                <img src="src/care-marble.jpg" alt="Marble Care" class="mb-3">
                                <h5>Marble Care</h5>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                   <!-- Modal Popup -->
                    <div id="categoryModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <h2 id="modal-title"></h2>
                            <img id="modal-image" src="" alt="Category Image">
                            <div id="modal-content"></div>
                        </div>
                    </div>


            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="blog-posts py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 data-aos="fade-up">Latest Articles</h2>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item sort-option" href="#" data-sort="newest">Newest First</a></li>
                        <li><a class="dropdown-item sort-option" href="#" data-sort="oldest">Oldest First</a></li>
                        <li><a class="dropdown-item sort-option" href="#" data-sort="popular">Most Popular</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row" id="blogPostsContainer">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-date="2025-02-15" data-popularity="95">
                    <div class="blog-card">
                        <img src="src/trends.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">February 15, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#Trends</span>
                                <span class="blog-tag">#Design</span>
                            </div>
                            <h3>Top 10 Marble Trends for 2025</h3>
                            <p>Discover the latest marble design trends that are transforming modern interiors this year.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post1">
                                    <i class="far fa-heart"></i> <span class="like-count">85</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post1">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post1">
                                    <i class="far fa-comment"></i> <span class="comment-count">12</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="Top 10 Marble Trends for 2025"
                                data-image="src/trends.jpg"
                                data-date="February 15, 2025"
                                data-content="Discover the latest marble design trends that are transforming modern interiors this year. From luxurious Italian marble to sustainable and budget-friendly alternatives, 2025 brings a fresh wave of creativity. Learn how designers are integrating bold veining, textured surfaces, and unique color palettes into their projects. Whether you're renovating your home or seeking inspiration for your next masterpiece, these trends are a must-know."
                                data-tags="#Trends,#Design,#Interiors,#Luxury,#Architecture,#HomeDecor">
                                Read More
                            </a>
                         

                         

                        </div>
                    </div>
                </div>
                


                                <!-- Article Read More Modal -->
                                <div id="articleReadMoreModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeArticleModal()">&times;</span>
                                        <h2 id="articleTitle"></h2>
                                        <img id="articleImage" src="" alt="Article Image" class="img-fluid">
                                        <p id="articleDate"></p>
                                        <div id="articleTags"></div>
                                        <p id="articleContent"></p>
                                    </div>
                                </div>


                

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100" data-date="2025-02-10" data-popularity="87">
                    <div class="blog-card">
                        <img src="src/ecofriendly.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">February 10, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#Sustainable</span>
                                <span class="blog-tag">#Eco</span>
                            </div>
                            <h3>Sustainable Marble: Eco-Friendly Choices</h3>
                            <p>How to incorporate beautiful marble into your home while maintaining environmental responsibility.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post2">
                                    <i class="far fa-heart"></i> <span class="like-count">67</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post2">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post2">
                                    <i class="far fa-comment"></i> <span class="comment-count">8</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="Sustainable Marble: Eco-Friendly Choices"
                                data-image="src/ecofriendly.jpg"
                                data-date="February 10, 2025"
                                data-content="Marble is a timeless and elegant material, but sustainability is now at the forefront of design choices. Learn how to incorporate eco-friendly marble options, including reclaimed and engineered marble, into your home. Discover suppliers focusing on sustainable quarrying practices and how these choices impact the environment. Whether you’re designing a minimalist kitchen or a luxurious bathroom, find ways to maintain beauty while reducing your carbon footprint."
                                data-tags="#Sustainable,#Eco,#GreenLiving,#Architecture,#InteriorDesign">
                                Read More
                            </a>
                         
                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200" data-date="2025-02-05" data-popularity="105">
                    <div class="blog-card">
                        <img src="src/wash.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">February 5, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#Maintenance</span>
                                <span class="blog-tag">#Tips</span>
                            </div>
                            <h3>How to Properly Clean and Maintain Marble</h3>
                            <p>Expert tips for keeping your marble surfaces looking pristine for generations to come.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post3">
                                    <i class="far fa-heart"></i> <span class="like-count">92</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post3">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post3">
                                    <i class="far fa-comment"></i> <span class="comment-count">15</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="How to Properly Clean and Maintain Marble"
                                data-image="src/wash.jpg"
                                data-date="February 5, 2025"
                                data-content="Marble surfaces are known for their elegance and durability, but they require special care to maintain their beauty over time. Learn expert-recommended cleaning techniques, including safe pH-neutral cleaners, daily maintenance routines, and tips to prevent stains, etching, and discoloration. Discover the best practices for sealing marble countertops and floors, and how to handle accidental spills effectively. With proper care, your marble surfaces can remain pristine and timeless for generations."
                                data-tags="#Maintenance,#Tips,#Cleaning,#HomeCare,#InteriorDesign">
                                Read More
                            </a>
                         
                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 4 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-date="2025-01-28" data-popularity="75">
                    <div class="blog-card">
                        <img src="src/small.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">January 28, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#SmallSpaces</span>
                                <span class="blog-tag">#Design</span>
                            </div>
                            <h3>Marble in Small Spaces: Maximizing Impact</h3>
                            <p>Creative ways to incorporate marble in apartments and smaller homes for dramatic effect.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post4">
                                    <i class="far fa-heart"></i> <span class="like-count">54</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post4">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post4">
                                    <i class="far fa-comment"></i> <span class="comment-count">7</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="Marble in Small Spaces: Maximizing Impact"
                                data-image="src/small.jpg"
                                data-date="January 28, 2025"
                                data-content="Marble can make even the smallest spaces feel luxurious and stylish. Learn how to use marble accents in compact kitchens, bathrooms, and living areas to create an elegant and spacious feel. Discover the best types of marble for smaller homes, how to pair it with lighting to enhance depth, and how to balance bold marble patterns with minimalistic decor. Whether it's a statement wall, a sleek countertop, or subtle marble accessories, this guide will help you transform limited spaces with timeless elegance."
                                data-tags="#SmallSpaces,#Design,#HomeDecor,#Minimalist,#LuxuryLiving">
                                Read More
                            </a>

                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 5 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100" data-date="2025-01-20" data-popularity="82">
                    <div class="blog-card">
                        <img src="src/patter.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">January 20, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#Patterns</span>
                                <span class="blog-tag">#Veining</span>
                            </div>
                            <h3>The Art of Veining: Understanding Marble Patterns</h3>
                            <p>Learn about different marble veining patterns and how they can influence your design choices.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post5">
                                    <i class="far fa-heart"></i> <span class="like-count">71</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post5">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post5">
                                    <i class="far fa-comment"></i> <span class="comment-count">9</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="The Art of Veining: Understanding Marble Patterns"
                                data-image="src/patter.jpg"
                                data-date="January 20, 2025"
                                data-content="Marble veining is an art form that defines the uniqueness and beauty of natural stone. In this guide, explore the different types of veining patterns—linear, wavy, dramatic, and subtle—and how they influence design aesthetics. Learn how to choose the right veining style for your space, whether you want a bold statement piece or a soft, harmonious flow. Discover how lighting and angles impact the appearance of veins, and find expert tips for pairing veined marble with complementary materials."
                                data-tags="#Patterns,#Veining,#InteriorDesign,#Luxury,#NaturalStone">
                                Read More
                            </a>

                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 6 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200" data-date="2025-01-15" data-popularity="98">
                    <div class="blog-card">
                        <img src="src/marb&gran.jpg" alt="Blog Post" class="img-fluid blog-img">
                        <div class="blog-content">
                            <span class="blog-date">January 15, 2025</span>
                            <div class="blog-tags">
                                <span class="blog-tag">#Comparison</span>
                                <span class="blog-tag">#Granite</span>
                            </div>
                            <h3>Marble vs. Granite: Making the Right Choice</h3>
                            <p>A comprehensive comparison to help you decide which stone is best for your specific project.</p>
                            <div class="blog-actions">
                                <button class="action-btn like-btn" data-post-id="post6">
                                    <i class="far fa-heart"></i> <span class="like-count">89</span>
                                </button>
                                <button class="action-btn bookmark-btn" data-post-id="post6">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="action-btn comment-btn" data-post-id="post6">
                                    <i class="far fa-comment"></i> <span class="comment-count">11</span>
                                </button>
                            </div>
                            <a href="#" class="read-more mt-3" 
                                onclick="openArticleModal(this)"
                                data-title="Marble vs. Granite: Making the Right Choice"
                                data-image="src/marb&gran.jpg"
                                data-date="January 15, 2025"
                                data-content="Choosing between marble and granite can be challenging, as both are stunning and durable natural stones. Marble offers a timeless, luxurious appeal with unique veining, making it ideal for elegant interiors. However, it requires more maintenance due to its porous nature. Granite, on the other hand, is highly durable, scratch-resistant, and perfect for high-traffic areas like kitchens. This guide compares their durability, maintenance, cost, and best applications to help you select the perfect stone for your project."
                                data-tags="#Comparison,#Granite,#Marble,#HomeDesign,#LuxuryLiving">
                                Read More
                            </a>

                        </div>
                    </div>
                </div>
            </div>
                  
            <!-- Load More Button -->
            <div class="text-center mt-4">
                <button id="loadMoreBtn" class="btn btn-outline-warning px-4 py-2">
                    Load More Articles <i class="fas fa-chevron-down ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Subscribe Section -->
    <section class="subscribe-section py-5 bg-light text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 data-aos="fade-up">Stay Updated</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Subscribe to our newsletter for the latest marble design trends and exclusive content.</p>
                    <form id="subscribeForm" class="subscribe-form mt-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="input-group">
                            <input type="email" class="form-control" id="subscribeEmail" placeholder="Your Email Address" required>
                            <button class="btn btn-warning" id="subscribeBtn" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

     
    <!-- Footer -->
    <footer class="custom-footer">
    <div class="container">
        <div class="row">
            <!-- Navigation Links -->
            <div class="col-md-4 footer-column">
                <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li><a href="Index.php" class="footer-link">Home</a></li>
                        <li><a href="explore.php" class="footer-link">Products</a></li>
                        <li><a href="index.php#Project-section" class="footer-link">Projects</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="footer-link">About Us</a></li>
                        <li><a href="contact.php" class="footer-link">Contact</a></li>
                        <li><a href="" class="footer-link">Privacy Policy</a></li>
                    </ul>
                </div>

                </div>
            </div>

            <!-- Social Links -->
            <div class="col-md-3 col-12 text-center text-md-start social-links">
                <a href="#" class="footer-link me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link me-3"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="footer-link me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-pinterest"></i></a>
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
    <script src="js/blog.js"></script>

</body>
</html>

