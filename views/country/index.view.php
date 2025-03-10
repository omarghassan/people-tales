<?php
// This file will be at views/country/index.view.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cultural Destinations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        .country-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .country-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .country-card:hover .country-img img {
            transform: scale(1.05);
        }

        .section-title {
            position: relative;
            display: inline-block;
            letter-spacing: 1px;
            font-weight: 600;
            color: #198754;
        }

        .section-title::before,
        .section-title::after {
            position: absolute;
            content: "";
            width: 50px;
            height: 2px;
            background: #198754;
            top: 50%;
        }

        .section-title::before {
            left: -60px;
        }

        .section-title::after {
            right: -60px;
        }
    </style>
</head>

<body>
    <?php require_once 'views/layout/public/header.php'; ?>

    <!-- Page Header -->
    <!-- <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-white text-uppercase">Cultural Destinations</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-light" href="/">Home</a>
                        <i class="fas fa-angle-right text-light mx-2"></i>
                        <a class="btn btn-outline-light disabled" href="">Destinations</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Countries Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="section-title bg-white text-center px-3 mb-2">Discover the World</p>
                <h2 class="mb-5">Explore Countries</h2>
            </div>

            <div class="container">
                <div class="row g-4 justify-content-center">
                    <?php
                    // Loop through countries with counter
                    $counter = 0;
                    foreach ($countries as $country):
                        $counter++;
                        // First row (3 countries) - use col-lg-4
                        if ($counter <= 3):
                    ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= 0.1 * $counter ?>s">
                                <div class="country-card h-100 rounded overflow-hidden position-relative">
                                    <div class="country-img position-relative" style="height: 250px; overflow: hidden;">
                                        <img src="<?= htmlspecialchars($country['image_url']) ?>"
                                            alt="<?= htmlspecialchars($country['name']) ?>"
                                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">

                                    </div>
                                    <div class="country-content p-4 bg-white">
                                        <h4 class="mb-0"><?= htmlspecialchars($country['name']) ?></h4>
                                        <p class="text-muted mb-3" style="height: 75px; overflow: hidden;"><?= htmlspecialchars(substr($country['description'], 0, 150)) ?>...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="country-info">
                                                <!-- <span class="d-block"><i class="bi bi-geo-alt me-1"></i> ?= rand(5, 15) ?> Destinations</span> -->
                                                <!-- <span><i class="bi bi-tag me-1"></i> ?= rand(10, 30) ?> Products</span> -->
                                            </div>
                                            <a href="/country/show/<?= $country['id'] ?>" class="btn btn-success rounded-pill px-4 py-2">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        // Second row (2 countries) - use col-lg-6
                        else:
                        ?>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?= 0.1 * $counter ?>s">
                                <div class="country-card h-100 rounded overflow-hidden position-relative">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <div class="country-img position-relative" style="height: 100%; overflow: hidden;">
                                                <img src="<?= htmlspecialchars($country['image_url']) ?>"
                                                    alt="<?= htmlspecialchars($country['name']) ?>"
                                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="country-content p-4 bg-white h-100 d-flex flex-column justify-content-between">
                                                <div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h4 class="mb-0"><?= htmlspecialchars($country['name']) ?></h4>
                                                    </div>
                                                    <p class="text-muted mb-3"><?= htmlspecialchars(substr($country['description'], 0, 150)) ?>...</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="country-info">
                                                        <!-- <span class="d-block"><i class="bi bi-geo-alt me-1"></i> ?= rand(5, 15) ?> Destinations</span> -->
                                                        <!-- <span><i class="bi bi-tag me-1"></i> ?= rand(10, 30) ?> Products</span> -->
                                                    </div>
                                                    <a href="/country/show/<?= $country['id'] ?>" class="btn btn-success rounded-pill px-4 py-2">Explore</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'views/layout/public/footer.php'; ?>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>