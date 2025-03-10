<?php require_once 'views/layout/admin/header.php' ?>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h1>Create Category</h1>

                            <form action="/categories/create" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php require_once 'views/layout/admin/footer.php' ?>

</body>

</html>