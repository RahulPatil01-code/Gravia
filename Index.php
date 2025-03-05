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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
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
                    <li class="nav-item"><a class="nav-link" href="./public/explore.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="./public/blog.php">Blog's</a></li>
                    <li class="nav-item"><a class="nav-link" href="./public/About.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./public/contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./public/login.php">Login</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->

    <section class="hero position-relative text-center text-white">
        <img src="src/italian.jpg" class="img-fluid w-100 hero-img">
        <div class="hero-overlay">
            <h1 data-aos="fade-up" class="display-3 fw-bold">Let's Make Your Vision a Reality</h1>
            <p data-aos="fade-up" data-aos-delay="200" class="fs-4">Custom-made marble solutions designed for your needs.</p>
            <a href="./public/contact.php" class="custom-button" data-aos="fade-up" data-aos-delay="400">Get In Touch</a>
        </div>
    </section>

    <section class="container bg-white my-5 position-relative">
        <div class="row align-items-center">
            <!-- Left Side: Image -->
            <div class="col-lg-6 position-relative">
                <img src="./src/Marble-Herringbone-Pattern.jpg" alt="Marble Flooring" class="img-fluid rounded">
            </div>
            
            <!-- Right Side: Text Content with Overlapping Effect -->
            <div class="col-lg-6 text-content">
                <h2 class="title">
                    Expertise and <span class="highlight">Innovation</span> of Flooring to Inspire You
                </h2>
                <p class="text-muted">
                    Our employees are professional men and women who guide you from the advisory phase to installing your kitchen. 
                    Our many years of experience were actually acquired with the help of which our foundations and secrets were built.
                </p>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->

    <section class="py-5 bg-white text-center">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service-box">
                        <img src="./src/diamonds.png" alt="Luxury icon">
                        <h3>Luxury Marble</h3>
                        <p>Exclusive designs for premium spaces.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-box">
                        <img src="./src/customization.png" alt="Custom Installation">
                        <h3>Custom Installations</h3>
                        <p>Tailored solutions for every project.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-box">
                        <img src="./src/prototype.png" alt="Creative design">
                        <h3>Creative Designs</h3>
                        <p>Unique styles to match your vision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainable kitchen Dreams section  -->


    <section class="container my-5 position-relative">
    <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
            <h5 class="text-uppercase text-muted">Sustainable Kitchen Dreams</h5>
            <h2 class="fw-bold">
                Your Dream <span class="highlight">Kitchen</span> Awaits
            </h2>
            <p>
                We are committed to providing our customers with super exceptional service while offering our employees the best training and a working environment in which they can excel.
            </p>
            <p>
                We understand that the kitchen is the heart of the home, and it should be designed to reflect your individual style and lay out a space for fulfilling your culinary passions.
            </p>
            <a href="#" class="btn btn-warning px-4 py-2" onclick="openReadMoreModal(event)">Read More</a>
        </div>
        
        <!-- Right Side: Image -->
        <div class="col-lg-6">
            <img src="./src/kitchen.jpg" alt="Marble Kitchen" class="img-fluid rounded" loading="lazy">
        </div>
    </div>
    </section>

                        <!-- Read More Modal -->
                    <div id="readMoreModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeReadMoreModal()">&times;</span>
                            <h2>Your Dream Kitchen Awaits</h2>
                            <img src="./src/dream-kitchen.jpg" alt="Marble Kitchen" class="modal-image">
                            <p>
                                Your kitchen is more than just a cooking space—it's where memories are made.  
                                Whether you love sleek **modern designs** or the warmth of **traditional aesthetics**,  
                                we craft kitchens that combine **luxury, comfort, and functionality**.  
                                <br><br>
                                🌱 <span class="highlight">Eco-Friendly Materials</span> – Sustainable, durable, and stylish.  <br>
                                🏡 <span class="highlight">Custom Creations</span> – Designed to fit your unique lifestyle. <br> 
                                🔥 <span class="highlight">Timeless Elegance</span> – Premium materials that elevate your space.  
                            </p>
                            
                        </div>
                    </div>





        <!-- Gallery section -->
    <section id="gallery" class="gallery py-5 text-center bg-white">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4">Our Exquisite Collection</h2>
            <div class="row">
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="card">
                        <img src="./src/BIANCO-CARRARA.jpg" alt="Carrara Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Carrara Marble</h3>
                            <p>Iconic Italian marble with soft gray veins, perfect for luxury interiors.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                        <img src="./src/GREY-EMPERADOR.jpg" alt="Nero Marquina" class="img-fluid">
                        <div class="card-content">
                            <h3>Nero Marquina</h3>
                            <p>Deep black marble with striking white veins, a bold and elegant choice.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card">
                        <img src="./src/verde-alpi.jpg" alt="Verde Alpi" class="img-fluid">
                        <div class="card-content">
                            <h3>Verde Alpi</h3>
                            <p>Rich green marble with natural patterns, bringing nature indoors.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card">
                        <img src="./src/CALACATTA_GOLD_A.jpg" alt="Calacatta Gold" class="img-fluid">
                        <div class="card-content">
                            <h3>Calacatta Gold</h3>
                            <p>Luxurious white marble with golden veins, a symbol of opulence.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="card">
                        <img src="./src/STATUARIO-VENATINO.jpg" alt="Statuario Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Statuario Marble</h3>
                            <p>Premium white marble with bold veining, ideal for statement designs.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                        <img src="./src/GREY-EMPERADOR.jpg" alt="Emperador Marble" class="img-fluid">
                        <div class="card-content">
                            <h3>Emperador </h3>
                            <p>Rich brown marble with white veining, perfect for warm interiors.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card">
                        <img src="./src/Azul_Macaubas.jpeg" alt="Azul Macaubas" class="img-fluid">
                        <div class="card-content">
                            <h3>Azul Macaubas</h3>
                            <p>Exotic blue quartzite marble, adding a cool and unique touch.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card">
                        <img src="./src/levanto_red.jpg" alt="Rosso Levanto" class="img-fluid">
                        <div class="card-content">
                            <h3>Rosso Levanto</h3>
                            <p>Deep red marble with white veins, adding drama and sophistication.</p>
                            <a href="login.php" class="quote-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
                
                

            </div>
            <div class="text-center mt-4">
                <a href="./public/explore.php" class="explore-btn">Experience the Elegance</a>
            </div>

            
        </div>
    </section>


    <!-- Trusted clients conunt section -->

    <section class="counter-section py-5 bg-white text-center">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4">Trusted by over <span class="counter" data-target="362">0</span> clients</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="counter-box">
                        <img src="./src/hammer.png" alt="Creative design">
                        <h3 class="counter" data-target="76">0</h3>
                        <p>Successful Ventures</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box">
                        <img src="./src/costumer.png" alt="Creative design">
                        <h3 class="counter" data-target="362">0</h3>
                        <p>Joyfull Faces</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box">
                        <img src="./src/award-symbol.png" alt="Creative design">
                        <h3 class="counter" data-target="19">0</h3>
                        <p>Prestigious Awards</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 text-center text-white bg-dark" id="Project-section">
        <div class="container">
            <h2 data-aos="fade-up" class="mb-4" class="project-headding">Our Projects</h2>
            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
                Explore our <span class="highlight">Exceptional flooring projects</span>, designed to bring <span class="highlight">elegance</span>and<span class="highlight"> durability</span> to every space.  
                From<span class="highlight"> luxurious interiors</span> to modern commercial areas, we redefine <span class="highlight">craftsmanship</span> with innovation.
            </p>
            
            
    
            <div class="swiper-container" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./src/commercial.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Commercial Spaces</h4>
                            <p>Durable & elegant flooring solutions for modern business environments.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./src/architectural.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Architectural Marvels</h4>
                            <p>Blending luxury with structural excellence in every detail.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./src/Interior.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Interior Designs</h4>
                            <p>Stylish, high-quality flooring that enhances every space.</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="./src/outdoor.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Outdoor Landscaping</h4>
                            <p>Premium stone flooring for beautiful and lasting outdoor spaces.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="./src/hotel-lobby.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Hotel Lobbies</h4>
                            <p>Grand, polished floors that leave a lasting impression.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="./src/Kitchens.jpg" class="img-fluid rounded shadow">
                        <div class="project-info">
                            <h4>Modern Kitchens</h4>
                            <p>Elegant and easy-to-maintain flooring for contemporary kitchens.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Team section -->
    
    <section class="team-section py-5 bg-white">
        <div class="container text-center">
            <h2 data-aos="fade-up">Meet Our Leadership</h2>
            <p class="subtitle" data-aos="fade-up" data-aos-delay="100">
                The visionaries behind our success.
            </p>
    
            <div class="row justify-content-center mt-4">
                <!-- CEO -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="team-box">
                        <img src="ceo.jpg" alt="CEO">
                        <h3>John Doe</h3>
                        <p class="position">Founder & CEO</p>
                        <p>Leading innovation with a passion for excellence.</p>
                    </div>
                </div>
    
                <!-- Manager -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-box">
                        <img src="manager.jpg" alt="Manager">
                        <h3>Jane Smith</h3>
                        <p class="position">Operations Manager</p>
                        <p>Ensuring seamless execution and efficiency.</p>
                    </div>
                </div>
    
                <!-- Another Person -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-box">
                        <img src="executive.jpg" alt="Executive">
                        <h3>Michael Lee</h3>
                        <p class="position">Creative Director</p>
                        <p>Bringing ideas to life with artistic vision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ section -->


    <section class="faq-section py-5 bg-white">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What types of marble do you offer?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            We offer a variety of marble, including Italian, Carrara, and more.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Do you provide installation services?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer professional installation services for all our products.
                        </div>
                    </div>
                </div>
    
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How do I maintain and clean my marble?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Use a pH-neutral cleaner and a soft cloth. Avoid acidic substances like vinegar and lemon.
                        </div>
                    </div>
                </div>
    
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Can I customize the size and finish of the marble?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer custom sizes and finishes based on your project requirements.
                        </div>
                    </div>
                </div>
    
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Do you offer a warranty on your marble products?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we provide a warranty on all our marble products. Warranty terms vary based on the type of marble.
                        </div>
                    </div>
                </div>
    
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            How long does delivery take?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Delivery times vary based on location, but typically range from 5 to 10 business days.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback section -->

    <section class="testimonials bg-light py-5">
        <div class="container text-center">
            <h2 data-aos="fade-up" class="mb-4">What Our Clients Say</h2>
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

    <!-- Contact Section -->
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer -->
    <footer class="custom-footer">
    <div class="container">
        <div class="row">
            <!-- Branding and Social Links -->
            <div class="col-md-3 footer-brand">
                <a class="navbar-brand fw-bold" href="Index.php">Gravia</a>
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
                            <li><a href="./Index.php" class="footer-link">Home</a></li>
                            <li><a href="./public/explore.php" class="footer-link">Products</a></li>
                            <li><a href="index.php#Project-section" class="footer-link">Projects</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="./public/about.php" class="footer-link">About Us</a></li>
                            <li><a href="./public/contact.php" class="footer-link">Contact</a></li>
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
    <script src="js/scripts.js"></script>

</body>
</html>
