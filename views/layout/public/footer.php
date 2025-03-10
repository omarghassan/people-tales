
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
    <link href="<?= asset("js/contact-validation.js") ?>" rel="stylesheet">


    <link rel="stylesheet" href="public/css/landing-about.css">
</head>
<body>

<!-- Footer Start -->
<footer class="footer py-5">
        <div class="container">
            <div class="row">
                <!-- People Tells Column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h3>People Tales</h3>
                    <p class="text-justify">Discover the world through culture at People Tells. We specialize in bringing you authentic, unique products from Jordan, Palestine, Morocco, Italy, and Japan. Each item tells a story, reflecting the rich heritage and traditions of its origin. Shop with us to experience the beauty of global craftsmanship right at your doorstep.</p>
                </div>
    
                <!-- Quick Links Column -->
                <div class="col-lg-4 col-md-6 mb-4 text-center">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
    
                <!-- Social Links and Newsletter Column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Social Links -->
                    <h3>Follow Us</h3>
                    <div class="social-icons mb-4">
                        <a href="#"><i class="ri-mail-fill"></i> contact@peopletales.com</a> <br>
                        <a href="https://www.bing.com/ck/a?!&&p=5414923c6786da60ca9e7078dac1ac27b00b316c37dcce2dcbd65eb4ef22e4bdJmltdHM9MTc0MTIxOTIwMA&ptn=3&ver=2&hsh=4&fclid=068b6d3d-5bad-6e58-064a-784f5ab06f28&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS9sb2dpbg&ntb=1"><i class="ri-twitter-fill"></i></a>
                        <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
                        <a href="https://www.bing.com/ck/a?!&&p=cbe9d6eb64bb5425f347355e01c57b94c7fd6cfed8211b2201bbd8caa39ff118JmltdHM9MTc0MTIxOTIwMA&ptn=3&ver=2&hsh=4&fclid=068b6d3d-5bad-6e58-064a-784f5ab06f28&psq=linkedin&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tLw&ntb=1"><i class="ri-linkedin-fill"></i></a>
                    </div>
    
                    <!-- Newsletter -->
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter to get the latest updates, exclusive offers, and more.</p>
                    <form class="d-flex" onsubmit="return validateNewsLetter()">
                        <input type="text" id="newsletter" class="form-control me-2" placeholder="Your email">
                        <button type="submit" class="btn btn-success">Subscribe</button>
                    </form>
                    <p id="errorMessage" style="color: red;"></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="<?=asset("js/newlsletter-validation.js") ?>"></script>
    </body>
</html>