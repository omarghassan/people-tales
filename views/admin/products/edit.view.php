<?php require_once 'views/layout/admin/header.php'
?>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h1>Edit Product Info</h1>

                            <form class="form" action="/categories/<?= $product['id'] ?>/edit" method="POST">
                                <!-- Use a hidden input to tell your system to treat it as PUT -->
                                <input type="hidden" name="_method" value="PUT" />

                                <div class="mb-3">
                                    <label for="name">Product Name:</label>
                                    <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" />
                                </div>

                                <div class="mb-3">
                                    <label for="description">Description:</label>
                                    <input type="text" name="description" value="<?= htmlspecialchars($product['description']) ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="price">Price:</label>
                                    <input type="text" name="price" value="<?= htmlspecialchars($product['price']) ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="product_image_url">Product Image URL:</label>
                                    <input type="text" name="product_image_url" value="<?= htmlspecialchars($product['product_image_url']) ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="country_id">Country ID:</label>
                                    <input type="text" name="country_id" value="<?= htmlspecialchars($product['country_id']) ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="category_id">Category ID:</label>
                                    <input type="text" name="category_id" value="<?= htmlspecialchars($product['category_id']) ?>" />
                                </div>

                                <button class="btn btn-success" type="submit">Update Category</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php require_once 'views/layout/admin/footer.php'
?>