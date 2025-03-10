<?php
require_once 'views/layout/admin/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div> -->

    <!-- Content Row -->
    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <!-- Content for your dashboard here -->

                            <!-- Example: Displaying all products -->
                            <h1>All Products</h1>
                            <p>
                                <a class="btn btn-success" href="/products/create">Create New product</a>
                            </p>

                            <?php if (!empty($products)): ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>IMG</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($product['id']) ?></td>
                                                <td><?= htmlspecialchars($product['name']) ?></td>
                                                <td><?= htmlspecialchars($product['price']) ?></td>
                                                <td><?= htmlspecialchars($product['description']) ?></td>
                                                <td><img class="custom-class" src="<?= htmlspecialchars($product['product_image_url']) ?>"
                                                        alt="<?= htmlspecialchars($product['name']) ?>" height="40"></td>
                                                <td>
                                                    <a class="btn btn-success" href="/products/<?= $product['id'] ?>">Show</a>
                                                    &nbsp;|&nbsp;
                                                    <a class="btn btn-warning" href="/products/<?= $product['id'] ?>/edit">Edit</a>
                                                    &nbsp;|&nbsp;
                                                    <form action="/products/<?= $product['id'] ?>" method="POST" style="display:inline;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p>No products found.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End of Main Content -->

<?php
require_once 'views/layout/admin/footer.php';
?>