<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Milky - Dairy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./styles/style.css">
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

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">
</head>

<body>

    <?php
    require_once 'views/layout/public/header.php'
    ?>


    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="<?=
                                asset("img/about/msg_012nRexHJn5GFbTyCWN5Khh4.webp") ?>"
                        class="d-block w-100" height="500" alt="..." style="opacity: 80%;">
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <p class="lead">
            <div class="about-box1">
                <h3>Welcome to <strong>People Tales</strong></h3>your gateway to a world of cultural treasures! We are an online platform dedicated to bringing you unique and authentic products from different cultures across the globe. Our mission is to connect people through the beauty of tradition, offering handcrafted items that tell a story
            </div>
            </p>
            <section class="about-section container">

                <!-- القسم الأول -->
                <div class="about-box">
                    <img src="<?= asset("img/about/7.webp") ?>" alt="Traditional Clothing" style="height: 250px;">
                    <div class="about-text">
                        <h3>Authentic Traditional Clothing</h3>
                        <p>We offer a wide range of handcrafted cultural outfits, celebrating heritage and style.</p>
                    </div>
                </div>

                <!-- القسم الثاني -->
                <div class="about-box">
                    <img src="<?= asset("img/about/2.webp") ?>" alt="Handmade Accessories">
                    <div class="about-text">
                        <h3>Handmade Accessories</h3>
                        <p>Our collection includes stunning jewelry and accessories crafted by skilled artisans.</p>
                    </div>
                </div>

                <!-- القسم الثالث -->
                <div class="about-box">
                    <img src="<?= asset("img/about/3.webp") ?>" alt="Cultural Home Décor">
                    <div class="about-text">
                        <h3>Cultural Home Décor</h3>
                        <p>Add a touch of tradition to your home with our unique décor pieces inspired by different cultures.</p>
                    </div>
                </div>

                <!-- القسم الرابع -->
                <div class="about-box">
                    <img src="<?= asset("img/about/4.webp") ?>" alt="Handwoven Textiles">
                    <div class="about-text">
                        <h3>Handwoven Textiles</h3>
                        <p>Experience the finest handwoven fabrics, crafted with love and tradition.</p>
                    </div>
                </div>

                <!-- القسم الخامس -->
                <div class="about-box">
                    <img src="<?= asset("img/about/5.webp") ?>" alt="Traditional Food">
                    <div class="about-text">
                        <h3>Traditional Food & Spices</h3>
                        <p>Enjoy a taste of culture with our selection of authentic spices and delicacies.</p>
                    </div>
                </div>

                <!-- القسم السادس -->
                <div class="about-box">
                    <img src="<?= asset("img/about/6.webp") ?>" alt="Cultural Gifts">
                    <div class="about-text">
                        <h3>Unique Cultural Gifts</h3>
                        <p>Find the perfect gift that carries history, tradition, and craftsmanship.</p>
                    </div>
                </div>

            </section>
        </div>
    </section>



    <?php
    require_once  'views/layout/public/footer.php';
    ?>



    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>