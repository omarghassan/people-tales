<?php
require_once 'views/layout/public/header.php'
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Order Confirmation</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                        <h4 class="mt-3">Thank You for Your Order!</h4>
                        <p>Your order has been placed successfully and is being processed.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Order Details</h5>
                        <table class="table">
                            <tr>
                                <td><strong>Order Number:</strong></td>
                                <td>#<?= $order['id'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Date:</strong></td>
                                <td><?= date('F j, Y, g:i a', strtotime($order['created_at'])) ?></td>
                            </tr>
                            <tr>
                                <td><strong>Payment Method:</strong></td>
                                <td>
                                    <?php
                                    switch($order['payment_method']) {
                                        case 'cod':
                                            echo 'Cash on Delivery';
                                            break;
                                        case 'bank_transfer':
                                            echo 'Bank Transfer';
                                            break;
                                        case 'credit_card':
                                            echo 'Credit/Debit Card';
                                            break;
                                        default:
                                            echo ucfirst($order['payment_method']);
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Total Amount:</strong></td>
                                <td>$<?= number_format($order['total_amount'], 2) ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Shipping Details</h5>
                        <p>
                            <strong><?= $order['full_name'] ?></strong><br>
                            <?= $order['address'] ?><br>
                            <?= $order['city'] ?>, <?= $order['state'] ?> <?= $order['zip'] ?><br>
                            <?= $order['email'] ?><br>
                            <?= $order['phone'] ?>
                        </p>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Order Summary</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($items as $item): ?>
                                    <tr>
                                        <td><?= $item['name'] ?></td>
                                        <td>$<?= number_format($item['price'], 2) ?></td>
                                        <td><?= $item['quantity'] ?></td>
                                        <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-end">Total:</th>
                                    <th>$<?= number_format($order['total_amount'], 2) ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="/countries" class="btn btn-primary">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'views/layout/public/footer.php'
?>