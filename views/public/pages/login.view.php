<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: transparent;">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand" href="/">
            <img src="<?= asset("img/landing/logo-Photoroom (1).webp") ?>" alt="Logo" style="width: 250px; height: 120px;">
        </a>
    </div>
</nav>



<div class="container mt-1 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> <!-- Slightly increased from col-md-4 to col-md-5 -->
            <form onsubmit="return validateLogin()" action="/login" method="post" class="p-4 border rounded shadow-sm">
                <h3 class="text-center mb-3">Login</h3> <!-- Maintained compact heading -->

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    <label for="email">Your Email</label>
                    <p id="errorMessageEmail" style="color: red;"></p>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Create your password" id="password" name="password">
                    <label for="password">Password</label>
                    <p id="errorMessagePassword" style="color: red;"></p>
                </div>

                <div class="d-grid">
                    <button class="btn rounded-pill py-2 px-5" type="submit" style="background-color: #1c8454; border-color: #1c8454; color: white;">
                        Login
                    </button> <!-- Slightly larger button with px-5 -->
                </div>
            </form>
        </div>
    </div>
</div>



    <!-- <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form onsubmit="return validateLogin()" action="/login" method="post" class="p-4 border rounded shadow-sm">
                    <h2 class="text-center mb-4">Login</h2>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                        <p id="errorMessageEmail" style="color: red;"></p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="Create your password" id="password" name="password">
                        <label for="password">Password</label>
                        <p id="errorMessagePassword" style="color: red;"></p>
                    </div>
                    
                    <div class="d-grid">
                    <button class="btn rounded-pill py-3 px-5" type="submit" style="background-color: #1c8454; border-color: #1c8454; color: white;">
    Login
</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->


    <?php
    require_once  'views/layout/public/footer.php';
    ?>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Sign-Up Validation -->
    <script src="<?= asset("js/registration-validation.js") ?>"></script>


</body>

</html>