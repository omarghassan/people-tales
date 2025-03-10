<?php
require_once 'views/layout/public/header.php'
?>

<div class="container mt-5">
    <h1>Checkout</h1>
    
    <?php if (empty($items)): ?>
        <div class="alert alert-info">
            Your cart is empty. <a href="/products">Continue shopping</a>.
        </div>
    <?php else: ?>
        <div class="row">
            <!-- Order Summary -->
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your Cart</span>
                    <span class="badge bg-primary rounded-pill"><?= count($items) ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php foreach ($items as $item): ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?= $item['name'] ?></h6>
                                <small class="text-muted">Quantity: <?= $item['quantity'] ?></small>
                            </div>
                            <span class="text-muted">$<?= number_format($item['price'] * $item['quantity'], 2) ?></span>
                        </li>
                    <?php endforeach; ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$<?= number_format($total, 2) ?></strong>
                    </li>
                </ul>
                
                <a href="/cart" class="btn btn-outline-secondary w-100">Edit Cart</a>
            </div>
            
            <!-- Checkout Form -->
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Shipping Information</h4>
                <form method="post" action="/checkout/process">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>
                        
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        
                        <div class="col-12">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                        </div>
                        
                        <div class="col-md-5">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" required>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h4 class="mb-3">Payment Method</h4>
                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit_card" name="payment_method" type="radio" class="form-check-input" value="credit_card" checked required>
                            <label class="form-check-label" for="credit_card">Credit/Debit Card</label>
                        </div>
                        <div class="form-check">
                            <input id="bank_transfer" name="payment_method" type="radio" class="form-check-input" value="bank_transfer" required>
                            <label class="form-check-label" for="bank_transfer">Bank Transfer</label>
                        </div>
                        <div class="form-check">
                            <input id="cod" name="payment_method" type="radio" class="form-check-input" value="cod" required>
                            <label class="form-check-label" for="cod">Cash on Delivery</label>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <button class="w-100 btn btn-success btn-lg mb-4" type="submit">Place Order</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
require_once 'views/layout/public/footer.php'
?>