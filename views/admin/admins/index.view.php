<?php
require_once 'views/layout/admin/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">

                            <h1>All Admins</h1>
                            <p>
                                <a class="btn btn-success" href="/admins/create">Add New Admin</a>
                            </p>

                            <?php if (!empty($admins)): ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($admins as $admin): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($admin['id']) ?></td>
                                                <td><?= htmlspecialchars($admin['adminname']) ?></td>
                                                <td><?= htmlspecialchars($admin['email']) ?></td>
                                                <td>
                                                    <a class="btn btn-warning" href="/admins/<?= $admin['id'] ?>/edit">Edit</a>
                                                    &nbsp;|&nbsp;
                                                    <form action="/admins/<?= $admin['id'] ?>" method="POST" style="display:inline;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p>No admins found.</p>
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