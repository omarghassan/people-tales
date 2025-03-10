<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Tells</title>

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./styles/style.css">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="/">
                <img src="<?= asset("img/landing/logo-Photoroom (1).webp") ?>" alt="Logo"  style="width: 150px;" >
            </a>

            <!-- Search Bar (Visible on all screens) -->
            <form class="d-flex mx-lg-3 my-2 my-lg-0 me-3 flex-grow-1 flex-lg-grow-0">
                <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search"
                    style="min-width: 150px; width: 100%;">
                <button class="btn btn-success" type="submit"><i class="ri-search-line"></i></button>
            </form>

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
                        <a class="nav-link" href="/jordan">Jordan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/palestine">Palestine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/morocco">Morocco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/italy">Italy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/japan">Japan</a>
                    </li>
                </ul>

                <!-- Icons -->
                <ul class="navbar-nav ms-auto list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="/register"><i class="ri-user-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart"><i class="ri-shopping-cart-2-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fav"><i class="ri-heart-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="ri-customer-service-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

</body>

</html>