<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($country['name']) ?> - Cultural Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">

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
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/public/css/landing-about.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <style>
        .sha {
            background-color: rgba(0, 0, 0, 0.2);

        }

        .product-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 150px;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .product-card:hover .product-img img {
            transform: scale(1.05);
        }

        .product-overlay {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-overlay .btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-overlay .btn {
            transform: translateY(0);
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

        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }

        .btn-outline-success {
            color: #198754;
            border-color: #198754;
        }

        .btn-outline-success:hover {
            background-color: #198754;
            border-color: #198754;
        }
    </style>
</head>

<body>
    <?php require_once 'views/layout/public/header.php'; ?>

    <!-- Carousel Start -->

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: url('<?= htmlspecialchars($country['banner_image_url']) ?>') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 sha">
            <h1 class="display-3 text-white mb-4 animated slideInDown ">Welcome To <?= htmlspecialchars($country['name']) ?></h1>

            <div class="mt-4">
                <a href="#product" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">See Products</a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="section-title bg-white text-center px-3 mb-2" id="product">Explore Products</p>
                <h2 class="mb-5"><?= htmlspecialchars($country['name']) ?>'s Products</h2>
            </div>

            <!-- Category Filter Buttons -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="d-inline-block mb-4">
                        <button class="btn btn-success rounded-pill px-4 py-2 mx-1 active" data-filter="all">All Products</button>
                        <?php
                        // Get unique categories
                        $categories = array_unique(array_column($products, 'category_name'));
                        foreach ($categories as $category):
                        ?>
                            <button class="btn btn-outline-success rounded-pill px-4 py-2 mx-1" data-filter="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4">
                <?php
                $counter = 0;
                foreach ($products as $product):
                    $counter++;
                ?>
                    <div class="col-md-6 col-lg-3 product-item wow fadeInUp" data-wow-delay="<?= 0.1 * ($counter % 4 + 1) ?>s" data-category="<?= htmlspecialchars($product['category_name']) ?>">
                        <div class="product-card rounded overflow-hidden position-relative" style="height: 460px;">
                            <div class="product-img position-relative" style="height: 250px; overflow: hidden;">
                                <img src="<?= htmlspecialchars($product['product_image_url']) ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>"
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                                <div class="product-badge position-absolute" style="top: 20px; right: 20px; background-color: rgba(25, 135, 84, 0.8); color: white; padding: 5px 15px; border-radius: 20px;">
                                    <?= htmlspecialchars($product['category_name']) ?>
                                </div>
                                <div class="product-overlay">
                                    <!-- <a class="btn btn-light btn-square rounded-circle m-1" href="/products/<?= $product['id'] ?>">
                                        <i class="bi bi-link"></i>
                                    </a> -->
                                    <form action="/cart/add" method="POST" class="d-inline">
                                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-light btn-square rounded-circle m-1">
                                            <i class="bi bi-cart"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content p-4 bg-white">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5 class="mb-0"><?= htmlspecialchars($product['name']) ?></h5>
                                    <span class="product-price text-success fw-bold">$<?= htmlspecialchars($product['price']) ?></span>
                                </div>
                                <p class="text-muted mb-3" style="height: 80px; overflow: hidden;"><?= htmlspecialchars($product['description']) ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-rating">
                                        <?php
                                        $rating = mt_rand(35, 50) / 10; // Random rating between 3.5 and 5.0
                                        $full_stars = floor($rating);
                                        $half_star = $rating - $full_stars >= 0.5 ? 1 : 0;

                                        for ($i = 0; $i < $full_stars; $i++):
                                        ?>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        <?php endfor;

                                        if ($half_star):
                                        ?>
                                            <i class="bi bi-star-half text-warning"></i>
                                        <?php endif;

                                        for ($i = 0; $i < (5 - $full_stars - $half_star); $i++):
                                        ?>
                                            <i class="bi bi-star text-warning"></i>
                                        <?php endfor; ?>
                                        <small class="text-muted ms-1">(<?= mt_rand(10, 99) ?>)</small>
                                    </div>
                                    <!-- <a href="#" class="add-to-cart btn btn-sm btn-success rounded-pill px-3">
                                        <i class="bi bi-cart-plus me-1"></i> Add
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Product End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image1_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image2_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image3_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image4_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start  pe-3">About <?= htmlspecialchars($country['name']) ?></p>
                    <p class="mb-4"><?= htmlspecialchars($country['description']) ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php require_once 'views/layout/public/footer.php'; ?>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('[data-filter]');
            const productItems = document.querySelectorAll('.product-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');

                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Show/hide products based on category
                    productItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>