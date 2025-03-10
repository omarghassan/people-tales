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

                            <h1>All Categories</h1>

                            <!-- Example: Display users in a table -->
                            <?php if (!empty($categories)): ?>
                                <p>
                                    <a class="btn btn-primary" href="/categories/create">Create New Category</a>
                                </p>
                                <table class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($categories as $category): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($category['id']) ?></td>
                                                <td><?= htmlspecialchars($category['name']) ?></td>
                                                <td>
                                                    <!-- Edit link (GET) -->
                                                    <a class="btn btn-warning" href="/categories/<?= $category['id'] ?>/edit">Edit</a>
                                                    &nbsp;|&nbsp;

                                                    <!-- Delete form (simulating DELETE via _method) -->
                                                    <form action="/categories/<?= $category['id'] ?>" method="POST" style="display:inline;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            <?php else: ?>
                                <p>No categories found.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
require_once 'views/layout/admin/footer.php'
?>