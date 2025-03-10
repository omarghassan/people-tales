<?php
// views/profile.view.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once 'views/layout/public/header.php'; ?>
    
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Profile Information Section -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4">My Profile</h3>
                        
                        <?php if (isset($_SESSION['flash_messages'])): ?>
                            <?php foreach ($_SESSION['flash_messages'] as $type => $messages): ?>
                                <?php if (!is_array($messages)) $messages = [$messages]; ?>
                                <?php foreach ($messages as $message): ?>
                                    <div class="alert alert-<?= $type === 'error' ? 'danger' : $type ?> alert-dismissible fade show">
                                        <?= htmlspecialchars($message) ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                            <?php unset($_SESSION['flash_messages']); ?>
                        <?php endif; ?>
                        
                        <div class="mb-4">
                            <h5 class="text-muted">Account Information</h5>
                            <p><strong>Username:</strong> <?= htmlspecialchars($user['username'] ?? 'Guest') ?></p>
                            <p><strong>Email:</strong> <?= htmlspecialchars($user['email'] ?? 'Not logged in') ?></p>
                            <p><strong>Member Since:</strong> <?= isset($user['created_at']) ? htmlspecialchars(date('M d, Y', strtotime($user['created_at']))) : 'N/A' ?></p>
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#updateForm">
                                Edit Profile
                            </button>
                            <a href="/logout" class="btn btn-danger">Logout</a>
                        </div>
                        
                        <div class="collapse mt-4" id="updateForm">
                            <h5>Update Profile</h5>
                            <form action="/profile/update" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($user['username'] ?? '') ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password (leave empty to keep current)</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Order History Section -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4">My Orders</h3>
                        
                        <?php if (!empty($orders)): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order): ?>
                                            <tr>
                                                <td>#<?= htmlspecialchars($order['order_id']) ?></td>
                                                <td><?= isset($order['order_date']) ? htmlspecialchars(date('M d, Y', strtotime($order['order_date']))) : 'N/A' ?></td>
                                                <td>$<?= htmlspecialchars(number_format($order['total_amount'] ?? 0, 2)) ?></td>
                                                <td>
                                                    <?php
                                                    $status = $order['status'] ?? 'Processing';
                                                    $statusClasses = [
                                                        'Processing' => 'bg-warning',
                                                        'Shipped' => 'bg-info',
                                                        'Delivered' => 'bg-success',
                                                        'Cancelled' => 'bg-danger',
                                                    ];
                                                    $statusClass = $statusClasses[$status] ?? 'bg-secondary';
                                                    ?>
                                                    <span class="badge <?= $statusClass ?>"><?= htmlspecialchars($status) ?></span>
                                                </td>
                                                <td>
                                                    <a href="/order/<?= $order['order_id'] ?>" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <p class="mb-0">You haven't placed any orders yet.</p>
                                <a href="/" class="btn btn-primary mt-3">Start Shopping</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once 'views/layout/public/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>