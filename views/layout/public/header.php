
<?php


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./styles/style.css">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
         <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="/">
                <img src="<?= asset("img/landing/logo-Photoroom (1).webp") ?>" alt="Logo"  style="width: 150px ;height:70px" >
            </a>

            <!-- Search Bar (Visible on all screens) -->
            <!-- <form class="d-flex mx-lg-3 my-2 my-lg-0 me-3 flex-grow-1 flex-lg-grow-0">
                <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search"
                    style="min-width: 150px; width: 100%;">
                <button class="btn btn-success" type="submit"><i class="ri-search-line"></i></button>
            </form> -->

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Nav Links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/country/show/1">Jordan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/country/show/4">Palestine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/country/show/5">Morocco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/country/show/3">Italy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/country/show/2">Japan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/countries">All countries</a>
                    </li>
                </ul>

                <!-- Icons -->
                <ul class="navbar-nav ms-auto list-unstyled">
                    <!-- User Authentication Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-user-fill me-1"></i>
                            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                                <!-- If user is logged in, display their username alongside the icon -->
                                <span class="username-display"><?= htmlspecialchars($_SESSION['username']) ?></span>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                                <!-- Menu items for logged-in users -->
                                <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                                <li><a class="dropdown-item" href="/orders">My Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            <?php else: ?>
                                <!-- Menu items for guests -->
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/register">Sign Up</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart"><i class="ri-shopping-cart-2-fill"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/fav"><i class="ri-heart-fill"></i></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="ri-customer-service-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Global styles and dropdown fix script -->
    <style>
        /* Ensure dropdown will only show on click, not hover */
        .navbar .dropdown-menu {
            display: none !important;
        }
        
        .navbar .dropdown-menu.show {
            display: block !important;
        }
        
        /* Username styling */
        .username-display {
            font-weight: 500;
            display: inline-block;
            vertical-align: middle;
        }
        
        /* Make sure the dropdown toggle has pointer cursor */
        .dropdown-toggle {
            cursor: pointer;
        }
    </style>
 
    <script>
        // Make sure this script runs on every page
        document.addEventListener('DOMContentLoaded', function() {
            // Force Bootstrap to use click instead of hover for all dropdowns
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
                // Explicitly create dropdown with click configuration
                return new bootstrap.Dropdown(dropdownToggleEl, {
                    hover: false
                });
            });
            
            // Add click event listeners to ensure dropdowns work consistently
            dropdownElementList.forEach(function(dropdownToggle) {
                dropdownToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    bootstrap.Dropdown.getOrCreateInstance(this).toggle();
                });
            });
        });
    </script>
</body>

</html>




