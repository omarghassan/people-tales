<?php
require_once 'views/layout/public/header.php'
?>

<div class="container mt-5">
    <h1>Your Shopping Cart</h1>
    
    <?php if (empty($items)): ?>
        <div class="alert alert-info">
            Your cart is empty. <a href="/countries">Continue shopping</a>.
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td>
                                <?php if (!empty($item['image'])): ?>
                                    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" style="width: 50px; height: 50px; object-fit: cover;">
                                <?php endif; ?>
                                <?= $item['name'] ?>
                            </td>
                            <td>$<?= number_format($item['price'], 2) ?></td>
                            <td>
                                <form action="/cart/update" method="post">
                                    <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                                    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="0" max="99" class="form-control" style="width: 70px;" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
                            <td>
                                <a href="/cart/remove/<?= $item['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Total:</th>
                        <th>$<?= number_format($total, 2) ?></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class="d-flex justify-content-between m-4">
            <a href="/countries" class="btn btn-success">Continue Shopping</a>
            <div>
                <a href="/cart/clear" class="btn btn-danger" onclick="return confirm('Are you sure you want to clear your cart?')">Clear Cart</a>
                <a href="/checkout" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
require_once 'views/layout/public/footer.php'
?>