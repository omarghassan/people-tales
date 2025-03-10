<?php
require_once 'views/layout/admin/header.php';
?>

<div class="container-fluid">
    
    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h1>Add New Admin</h1>

                            <form action="/admins/create" method="POST">
                                <div class="mb-3">
                                    <label for="adminname" class="form-label">Username</label>
                                    <input name="adminname" type="text" class="form-control" id="adminname" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
require_once 'views/layout/admin/footer.php';
?>