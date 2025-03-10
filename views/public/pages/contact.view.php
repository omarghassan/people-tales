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

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/imported.css">
    <link rel="stylesheet" href="public/css/landing-about.css">
    <link rel="stylesheet" href="public/css/landing-about.css">
    <title>People Tells</title>
</head>

<body>

    <!-- Navbar Start -->
    <?php
    require_once "views/layout/public/header.php"
    ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <section>
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5">Contact Us</h1>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3>Don't hesitate to reach out</h3>
                        <form onsubmit="return validateContact()" action="/contact" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                    <p id="errorMessageName" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                    <p id="errorMessageEmail" style="color: red;"></p>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 250px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <p id="errorMessageMessage" style="color: red;"></p>
                                </div>
                                <div class="col-12">
                                <button class="btn rounded-pill py-3 px-5" type="submit" style="background-color: #1c8454; color: white;">
    Send Message
</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">Contact Details</h3>
                        <div class="d-flex border-bottom pb-3 mb-3">
    <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" 
        style="background-color: #1c8454; width: 50px; height: 50px;">
        <i class="ri-map-pin-2-fill" style="color: white; font-size: 24px;"></i>
    </div>
    <div class="ms-3">
        <h6>Our Office</h6>
        <span>Ar-Razi Street, Amman, Jordan</span>
    </div>
</div>

<div class="d-flex border-bottom pb-3 mb-3">
    <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" 
        style="background-color: #1c8454; width: 50px; height: 50px;">
        <i class="ri-phone-fill" style="color: white; font-size: 24px;"></i>
    </div>
    <div class="ms-3">
        <h6>Call Us</h6>
        <span>+012 345 67890</span>
    </div>
</div>

<div class="d-flex border-bottom pb-3 mb-3">
    <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" 
        style="background-color: #1c8454; width: 50px; height: 50px;">
        <i class="ri-mail-fill" style="color: white; font-size: 24px;"></i>
    </div>
    <div class="ms-3">
        <h6>Mail Us</h6>
        <span>contact@peopletales.com</span>
    </div>
</div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.657812323126!2d35.90723197583222!3d31.97017872478082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1dd7bca79dd%3A0x9b0416f056ff0786!2sOrange%20Digital%20Village!5e0!3m2!1sen!2sjo!4v1741033479304!5m2!1sen!2sjo"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Header End -->

    <?php 
require_once  'views/layout/public/footer.php';
?>

    
         

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="<?= asset("js/contact-validation.js") ?>" ></script>
    <script src="scripts/contact-validation.js"></script>
</body>

</html>









