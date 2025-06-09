<?php
require 'model_book.php';
$book = getAllbook();
$counter = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
</head>
<link rel="stylesheet" href="src/main.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <!-- Left: Brand -->
            <a class="navbar-brand" href="#">CRUD DASAR</a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Left: Menu -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <a href="login.php" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5" style="margin-bottom: 150px;">
        <div class="row mb-3">
            <div class="col-md-6 col-12 d-flex align-items-center mb-2 mb-md-0">
                <h2 class="mb-0">Item List</h2>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-md-end gap-2">
                <input id="searchInput" class="form-control w-auto flex-grow-1" type="text" placeholder="Search..."
                    autocomplete="off">
                <a class="btn btn-primary" href="add.php">+ Add Item</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered tableku">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <?php foreach ($book as $books): ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?= htmlspecialchars($books['name_book']) ?></td>
                            <td><?= htmlspecialchars($books['deskripsi']) ?></td>
                            <td>
                                <form action="edit.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= $books['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                                </form>
                                <form action="function_delete.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= $books['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- More rows can be dynamically added here -->
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center text-lg-start" style="position: fixed; bottom: 0; width: 100%;">
        <div class="container p-3">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-light">Link 1</a></li>
                        <li><a href="#!" class="text-light">Link 2</a></li>
                        <li><a href="#!" class="text-light">Link 3</a></li>
                        <li><a href="#!" class="text-light">Link 4</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Contact</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p class="mb-0">Email: contact@example.com</p>
                        </li>
                        <li>
                            <p class="mb-0">Phone: +123 456 7890</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-secondary">
            © 2025 BrandName. All rights reserved.
        </div>
    </footer>

</body>
<!-- ✅ Load jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ Then Bootstrap JS (optional, for other features) -->
<script src="src/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Then Your Custom JS -->
<script src="src/js/search.js"></script>

</html>