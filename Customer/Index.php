<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravia User Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom Styles */
        .top-nav {
            background: #f8f9fa;
            padding: 5px 0;
            font-size: 14px;
        }
        .bottom-nav {
            background: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <div class="top-nav d-flex justify-content-between px-4">
        <div>
            <a href="#" class="me-3">Locate a Store</a>
            <a href="#">Customer Login</a>
        </div>
        <div>
            <a href="#">Contact</a>
        </div>
    </div>
    
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg bottom-nav">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="#">GRAVIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">Marble</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Italian Marble</a></li>
                            <li><a class="dropdown-item" href="#">Granite</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Floor Tiles</a></li>
                            <li><a class="dropdown-item" href="#">Wall Tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">Design Ideas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Modern Interiors</a></li>
                            <li><a class="dropdown-item" href="#">Classic Designs</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</body>
</html>
