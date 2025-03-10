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
        <div class="col-md-5"> <!-- Matching login form width -->
            <?php if (isset($_SESSION['flash_messages']['error'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['flash_messages']['error'] ?>
                </div>
            <?php endif; ?>

            <form onsubmit="return validateRegistration()" action="/register" method="post" class="p-4 border rounded shadow-sm">
                <h3 class="text-center mb-3">Register</h3> <!-- Same heading size as Login -->

                <div class="form-floating mb-3">
                    <input type="text" class="form-control <?= isset($_SESSION['form_errors']['username']) ? 'is-invalid' : '' ?>"
                        id="name" name="username"
                        value="<?= $_SESSION['form_data']['username'] ?? '' ?>"
                        placeholder="Your Name">
                    <label for="name">Your Name</label>
                    <p id="errorMessageName" style="color: red;">
                        <?php if (isset($_SESSION['form_errors']['username'])): ?>
                            <?= implode('<br>', $_SESSION['form_errors']['username']) ?>
                        <?php endif; ?>
                    </p>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control <?= isset($_SESSION['form_errors']['email']) ? 'is-invalid' : '' ?>"
                        id="email" name="email"
                        value="<?= $_SESSION['form_data']['email'] ?? '' ?>"
                        placeholder="Your Email">
                    <label for="email">Your Email</label>
                    <p id="errorMessageEmail" style="color: red;">
                        <?php if (isset($_SESSION['form_errors']['email'])): ?>
                            <?= implode('<br>', $_SESSION['form_errors']['email']) ?>
                        <?php endif; ?>
                    </p>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control <?= isset($_SESSION['form_errors']['password']) ? 'is-invalid' : '' ?>"
                        placeholder="Create your password" id="password" name="password">
                    <label for="password">Password</label>
                    <p id="errorMessagePassword" style="color: red;">
                        <?php if (isset($_SESSION['form_errors']['password'])): ?>
                            <?= implode('<br>', $_SESSION['form_errors']['password']) ?>
                        <?php endif; ?>
                    </p>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control"
                        placeholder="Confirm your password" id="confirmPassword" name="confirmPassword">
                    <label for="confirmPassword">Confirm Password</label>
                    <p id="errorMessageConfirmPassword" style="color: red;"></p>
                </div>

                <div class="d-grid">
                    <button class="btn rounded-pill py-2 px-5" type="submit" style="background-color: #198754; border-color: #198754; color: white;">
                        Register
                    </button> <!-- Matched Login button size -->
                </div>

                <div class="mt-3 text-center">
                    Already have an account? <a href="/login">Log in</a>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Sign-Up Validation -->
    <script src="<?= asset("js/registration-validation.js") ?>"></script>

    <?php
    // Clear session variables after displaying
    unset($_SESSION['form_errors']);
    unset($_SESSION['form_data']);
    ?>
<?php
    require_once  'views/layout/public/footer.php';
    ?>

</body>

</html>