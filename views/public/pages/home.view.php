<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">

    <style>
        .slider-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .swiper {
            width: 100%;
            padding: 30px 10px;
        }

        .swiper-slide {
            height: auto;
            padding: 10px;
        }

        .product-card {
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            height: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .product-img {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .product-img:hover .product-overlay {
            opacity: 1;
        }

        .product-img:hover img {
            transform: scale(1.1);
        }

        .product-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #198754;
        }

        .swiper-pagination-bullet-active {
            background: #198754;
        }
    </style>

    <title>People Tells</title>
</head>

<body>
    <!-- PHP header would be here -->
    <?php
    require_once 'views/layout/public/header.php'
    ?>

    <!-- Header Start -->
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/img/landing/freepik__upload__1836-Photoroom.jpg" class="d-block w-100" height="500" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                        <div class="bg-dark bg-opacity-75 px-5 py-4 rounded" style="max-width: 80%;">
                            <h1 class="text-white display-4 fw-bold mb-3">Welcome To People Tales</h1>
                            <p class="text-white fs-5 mb-4">Discover unique stories and cultural heritage from around the world. Explore our curated collection of authentic cultural products and artisan crafts.</p>
                            <a class="btn btn-primary btn-lg px-4 py-2" href="#explore" style="background-color: #e0d4b8; border-color: #e0d4b8; color: #333; font-size: 1.2rem;">Explore Cultural Products</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                <img src="./public/img/landing/Untitled_design.webp" class="d-block w-100" height="500" alt="...">
            </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
        </div>
    </section>
    <!-- Header End -->

    <!-- Countries Start -->
    <section class="container my-5" id="explore">
        <h2 class="text-center mb-5">Countries</h2>
        <div class="row row-cols-3 row-cols-md-3 row-cols-lg-5 g-5">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/1">
                            <img src="public/img/landing/p.webp" alt="Jordan Flag" class="img-fluid">
                        </a>

                        <h5 class="card-title">Jordan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/4">
                            <img src="public/img/landing/f.webp" alt="Palestine Flag"
                                class="img-fluid">
                        </a>
                        <h5 class="card-title">Palestine</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/5">
                            <img src="public/img/landing/m.webp" alt="Morocco Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Morocco</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/3">
                            <img src="public/img/landing/i.webp" alt="Italy Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Italy</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/2">
                            <img src="public/img/landing/j.webp" alt="Japan Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Japan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countries End -->

    <!-- Best Selling Start -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Best Selling</h2>
        <?php
        $bestSellingProducts = [
            [
                "id" => 1,
                "name" => "Mineral Toner",
                "price" => "10",
                "image_url" => "https://rivagecare.com/pub/media/catalog/product/cache/22f718aa4c60fc911cb10755b41e0ecf/m/i/mineral-toner_1.webp",
                "category_name" => "Beauty",
                "description" => "Natural mineral toner for refreshing skin care routine."
            ],
            [
                "id" => 2,
                "name" => "Sushi Plates",
                "price" => "12",
                "image_url" => "https://www.takaski.com/wp-content/uploads/2016/10/Wooden-Zen-Sushi-Plate2.jpg",
                "category_name" => "Kitchen",
                "description" => "Traditional wooden zen sushi plates, perfect for Japanese cuisine."
            ],
            [
                "id" => 3,
                "name" => "Qamar al-Din",
                "price" => "20",
                "image_url" => "https://i.etsystatic.com/31513351/r/il/16d39e/4734241113/il_1588xN.4734241113_lhw6.jpg",
                "category_name" => "Food",
                "description" => "Traditional apricot drink, popular during Ramadan."
            ],
            [
                "id" => 4,
                "name" => "Balsamic Vinegar",
                "price" => "25",
                "image_url" => "https://i.pinimg.com/originals/8a/4a/b1/8a4ab11a59028ca7766808c6dd121ec4.jpg",
                "category_name" => "Condiments",
                "description" => "Premium Italian balsamic vinegar aged in wooden barrels."
            ],
        ];
        ?>

        <div class="slider-container">
            <div class="swiper best-selling-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($bestSellingProducts as $index => $product): ?>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="<?= htmlspecialchars($product['image_url']) ?>"
                                        alt="<?= htmlspecialchars($product['name']) ?>">
                                    <div class="product-badge position-absolute" style="top: 20px; right: 20px; background-color: rgba(25, 135, 84, 0.8); color: white; padding: 5px 15px; border-radius: 20px;">
                                        <?= htmlspecialchars($product['category_name']) ?>
                                    </div>
                                    <div class="product-overlay">
                                        <!-- <a class="btn btn-light btn-square rounded-circle m-1" href="/products/<?= $product['id'] ?>">
                                            <i class="bi bi-link"></i>
                                        </a> -->
                                        <form action="/cart/add" method="POST" class="d-inline">
                                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
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
                                    <p class="text-muted mb-3" style="height: 60px; overflow: hidden;"><?= htmlspecialchars($product['description']) ?></p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
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

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Best Selling End -->

    <!-- Recommended Start -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Recommended</h2>
        <?php
        $recommendedProducts = [
            [
                "id" => 1,
                "name" => "Hand Fan",
                "price" => "50",
                "image_url" => "https://th.bing.com/th/id/R.7f12ef12fc064014f0db1c01b4a2d3e4?rik=oJOxMhE3yctDog&pid=ImgRaw&r=0",
                "category_name" => "Fashion",
                "description" => "Elegant traditional abaya with modern styling and comfortable fabric."
            ],
            [
                "id" => 2,
                "name" => "Ceramic Plates",
                "price" => "12",
                "image_url" => "https://th.bing.com/th/id/OIP.L9S-VoPcx8mjXDj3BrnBywHaIm?rs=1&pid=ImgDetMain",
                "category_name" => "Kitchenware",
                "description" => "Hand-painted Italian ceramic plates with beautiful traditional designs."
            ],
            [
                "id" => 3,
                "name" => "Espresso Coffee",
                "price" => "20",
                "image_url" => "https://m.media-amazon.com/images/I/51LdiDlXKLL._SL1080_.jpg",
                "category_name" => "Beverages",
                "description" => "Premium Italian espresso blend with rich aroma and full body flavor."
            ],
            [
                "id" => 4,
                "name" => "Silk Scarves",
                "price" => "25",
                "image_url" => "https://cdn.shopify.com/s/files/1/0026/1124/9241/products/Oksana-Fine-Art-Design-Italian-silk-scarf-Lavender-Dream-side-90-cm_2000x.jpg?v=1613959970",
                "category_name" => "Accessories",
                "description" => "Luxurious silk scarves with elegant designs, perfect for any occasion."
            ],
        ];
        ?>

        <div class="slider-container">
            <div class="swiper recommended-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($recommendedProducts as $index => $product): ?>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="<?= htmlspecialchars($product['image_url']) ?>"
                                        alt="<?= htmlspecialchars($product['name']) ?>">
                                    <div class="product-badge position-absolute" style="top: 20px; right: 20px; background-color: rgba(25, 135, 84, 0.8); color: white; padding: 5px 15px; border-radius: 20px;">
                                        <?= htmlspecialchars($product['category_name']) ?>
                                    </div>
                                    <div class="product-overlay">
                                        <!-- <a class="btn btn-light btn-square rounded-circle m-1" href="/products/<?= $product['id'] ?>">
                                            <i class="bi bi-link"></i>
                                        </a> -->
                                        <form action="/cart/add" method="POST" class="d-inline">
                                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
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
                                    <p class="text-muted mb-3" style="height: 60px; overflow: hidden;"><?= htmlspecialchars($product['description']) ?></p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
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

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Recommended End -->

    <!-- About Us Start -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="public/img/landing/abo.webp" alt="About Us" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold">About Us</h2>
                    <p class="lead">
                        Welcome to <strong>People Tales</strong>, your gateway to a world of cultural treasures! We are an online platform dedicated to bringing you unique and authentic products from different cultures across the globe. Our mission is to connect people through the beauty of tradition, offering handcrafted items that tell a story.......
                    </p>
                    <a href="/about" class="btn rounded-pill py-3 px-5 animated slideInRight" style="background-color: #198754; color:white">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- PHP footer would be here -->
    <?php
    require_once 'views/layout/public/footer.php';
    ?>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Best Selling Swiper
            const bestSellingSwiper = new Swiper('.best-selling-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.best-selling-swiper .swiper-button-next',
                    prevEl: '.best-selling-swiper .swiper-button-prev',
                },
                pagination: {
                    el: '.best-selling-swiper .swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    // when window width is >= 576px
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    // when window width is >= 768px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    // when window width is >= 992px
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });

            // Initialize Recommended Swiper
            const recommendedSwiper = new Swiper('.recommended-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.recommended-swiper .swiper-button-next',
                    prevEl: '.recommended-swiper .swiper-button-prev',
                },
                pagination: {
                    el: '.recommended-swiper .swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    // when window width is >= 576px
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    // when window width is >= 768px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    // when window width is >= 992px
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });
        });
    </script>
</body>

</html>