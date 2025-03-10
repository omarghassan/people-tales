<?php
require_once 'views/layout/admin/header.php'
?>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h3 class="text-center mb-4">Add Product</h3>
                            <form action="/products/create" method="POST">
                                <div class="mb-3">
                                    <label for="productName" class="form-label fw-bold">Product Name</label>
                                    <input name="name" type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="productPrice" class="form-label fw-bold">Price ($)</label>
                                    <input name="price" type="number" class="form-control" id="productPrice" placeholder="Enter price" required>
                                </div>

                                <div class="mb-3">
                                    <label for="productImage" class="form-label fw-bold">Image URL</label>
                                    <input name="product_image_url" type="text" class="form-control" id="productImage" placeholder="Enter image URL" required>
                                </div>

                                <div class="mb-3">
                                    <label for="productDescription" class="form-label fw-bold">Description</label>
                                    <textarea name="description" class="form-control" id="productDescription" rows="3" placeholder="Enter product description" required></textarea>
                                </div>

                                <div class="d-flex">
                                    <div class="col-6 mb-3">
                                        <label for="country_id" class="form-label fw-bold">Country ID</label>
                                        <input name="country_id" class="form-control" id="country_id" rows="3" placeholder="Enter country ID" required></input>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="category_id" class="form-label fw-bold">Category ID</label>
                                        <input name="category_id" class="form-control" id="category_id" rows="3" placeholder="Enter category ID" required></input>
                                    </div>
                                </div>

                                <button type="submit" class="btn w-100" style="background-color: #198754; border-color: #198754; color:white">Add Product</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
require_once  'views/layout/admin/footer.php';
?>