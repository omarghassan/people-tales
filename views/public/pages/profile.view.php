<?php
//session_start();
require_once 'config/Database.php'; // Ensure correct path

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Get user ID from session

    try {
        // Database connection
        $pdo = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch user details
        $stmt = $pdo->prepare("SELECT username, email FROM users WHERE user_id = :user_id");
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Use correct column names
        $name = $user['username'] ?? "Guest";
        $email = $user['email'] ?? "Not logged in";

        // Fetch order history for the user ordered by order_date
        $orderStmt = $pdo->prepare("SELECT order_id, total_amount, order_date FROM orders WHERE user_id = :user_id ORDER BY order_date DESC");
        $orderStmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $orderStmt->execute();
        $orders = $orderStmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    $name = "Guest";
    $email = "Not logged in";
    $orders = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile & Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

<?php
    require_once 'views/layout/public/header.php'
    ?>
        
     

        <div class="container mt-5">
    <div class="row">
        <!-- Profile Section -->
        <div class="col-md-3">
            <div class="card p-3">
                <h4>Profile</h4>
                <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <button class="btn btn-danger w-100">Logout</button>
            </div>
        </div>

        <!-- Orders Section -->
        <div class="col-md-9">
            <h4>Order History</h4>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <div class="card mb-3 p-3">
                        <h5>Order #<?= htmlspecialchars($order['order_id']) ?></h5>
                        <p><strong>Total Amount:</strong> $<?= htmlspecialchars($order['total_amount']) ?></p>
                        <p><strong>Order Date:</strong> <?= htmlspecialchars($order['order_date']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No orders found.</p>
            <?php endif; ?>
            <button class="btn btn-primary w-100">All Orders</button>
        </div>
    </div>
</div>
    
    <?php
    require_once  'views/layout/public/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>