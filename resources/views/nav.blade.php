<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limme Limousine Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        /* Custom CSS to match Limme theme */
        :root {
            --primary-color: #ff5722;
            --dark-color: #222222;
            --text-color: #777777;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
        }
        
        /* Top bar styles */
        .top-bar {
            background-color: var(--dark-color);
            color: #fff;
            padding: 12px 0;
            font-size: 14px;
        }
        
        .top-bar a {
            color: #fff;
            text-decoration: none;
        }
        
        .social-icons a {
            margin-left: 15px;
            font-size: 14px;
        }
        
        /* Navbar styles */
        .navbar {
            padding: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .navbar-nav .nav-item {
            margin: 0 12px;
            position: relative;
        }
        
        .navbar-nav .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            font-size: 15px;
            padding: 10px 0;
            transition: color 0.3s;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-color);
        }
        
        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
            animation: fadeIn 0.3s;
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 0;
            padding: 10px 0;
            margin-top: 0;
        }
        
        .dropdown-item {
            padding: 8px 20px;
            color: var(--dark-color);
            font-size: 14px;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: var(--primary-color);
        }
        
        .navbar .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            margin-left: 15px;
            transition: all 0.3s;
        }
        
        .navbar .btn-primary:hover {
            background-color: #e64a19;
            border-color: #e64a19;
            transform: translateY(-2px);
        }
        
        .navbar-toggler {
            border: none;
            padding: 0;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            width: 24px;
            height: 17px;
            background-image: none;
            position: relative;
            border-bottom: 1px solid var(--dark-color);
            transition: all 300ms linear;
        }
        
        .navbar-toggler-icon:after, 
        .navbar-toggler-icon:before {
            width: 24px;
            position: absolute;
            height: 1px;
            background-color: var(--dark-color);
            top: 0;
            left: 0;
            content: '';
            z-index: 2;
            transition: all 300ms linear;
        }
        
        .navbar-toggler-icon:after {
            top: 8px;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Media Queries */
        @media (max-width: 992px) {
            .navbar-collapse {
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 10px 15px rgba(0,0,0,0.1);
                margin-top: 15px;
            }
            
            .navbar-nav .nav-item {
                margin: 5px 0;
            }
            
            .dropdown-menu {
                box-shadow: none;
                padding-left: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="fas fa-phone-alt me-2"></i>
                            <a href="tel:+12345678900">+1 (234) 567-8900</a>
                        </div>
                        <div>
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:info@limme.com">info@limme.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-icons text-end">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/api/placeholder/200/50" alt="Limme Limousine Service">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="#">Home Variation 1</a></li>
                            <li><a class="dropdown-item" href="#">Home Variation 2</a></li>
                            <li><a class="dropdown-item" href="#">Home Variation 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Airport Transfer</a></li>
                            <li><a class="dropdown-item" href="#">Corporate Travel</a></li>
                            <li><a class="dropdown-item" href="#">Wedding Transport</a></li>
                            <li><a class="dropdown-item" href="#">Private Tours</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="fleetDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fleet
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="fleetDropdown">
                            <li><a class="dropdown-item" href="#">Sedan</a></li>
                            <li><a class="dropdown-item" href="#">SUV</a></li>
                            <li><a class="dropdown-item" href="#">Stretch Limousine</a></li>
                            <li><a class="dropdown-item" href="#">Party Bus</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li><a class="dropdown-item" href="#">Pricing</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <li><a class="dropdown-item" href="#">Team</a></li>
                            <li><a class="dropdown-item" href="#">Testimonials</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary d-none d-lg-inline-block">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Scripts - at the end of the body for better performance -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add hover class to dropdown on hover for desktop
            if ($(window).width() > 992) {
                $('.navbar .dropdown').hover(function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideDown(200);
                }, function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp(200);
                });
            }

            // Additional navbar behavior on scroll
            $(window).scroll(function() {
                if ($(window).scrollTop() > 50) {
                    $('.navbar').addClass('navbar-scrolled').css('padding', '10px 0');
                } else {
                    $('.navbar').removeClass('navbar-scrolled').css('padding', '20px 0');
                }
            });
        });
    </script>
</body>
</html>