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

                            <div class="col-md-4 mb-4">
                                <div class="card p-3">
                                    <img class="img-fluid" src="<?php echo $product['product_image_url'] ?>" alt="img" height="40">
                                    <h5 class="card-title"><?= $product['name'] ?></h5>
                                    <p class="card-text">JOD <?= $product['price'] ?> With Tax</p>
                                    <p class="card-text"> <?= $product['description'] ?> </p>
                                </div>
                            </div>

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