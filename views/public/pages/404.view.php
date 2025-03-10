<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .error-container {
            text-align: center;
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .error-code {
            font-size: 96px;
            font-weight: bold;
            color: #343a40;
        }

        .error-message {
            font-size: 24px;
            color: #6c757d;
        }

        .back-home {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php
    require_once 'views/layout/public/header.php';
    ?>

    <!-- Error Container -->
    <div class="container-fluid error-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="error-code">404</div>
                <div class="error-message">Oops! Page Not Found</div>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <a href="/" class="btn btn-primary back-home">Back to Home</a>
            </div>
        </div>
    </div>

    <?php
    require_once 'views/layout/public/footer.php';
    ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>
