<?php require_once 'views/layout/admin/header.php'
?>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h1>Edit Admin Info</h1>

                            <form action="/users/<?= $user['user_id'] ?>/edit" method="POST">
                                <!-- Use a hidden input to tell your system to treat it as PUT -->
                                <input type="hidden" name="_method" value="PUT" />
                                <label for="username">Username:</label>
                                <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" />

                                <label for="email">Email:</label>
                                <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" />

                                <button type="submit">Update User</button>
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