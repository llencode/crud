<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $conn->prepare('SELECT * FROM book WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
    } else {
        die('error');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<link rel="stylesheet" href="src/main.css">

<body>
    <div class="container-fluid">
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <h1>Edit</h1>
            </div>
        </div>
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <form action="function_edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>Nama Buku</h4>
                        </label>
                        <input type="text" name="name_book" class="form-control" id="exampleFormControlInput1"
                            value="<?php echo htmlspecialchars($book['name_book']) ?>" placeholder="Name Book">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>Deskripsi</h4>
                        </label>
                        <input type="text" name="description" class="form-control" id="exampleFormControlInput1"
                            value="<?php echo htmlspecialchars($book['deskripsi']) ?>" placeholder="deskripsi">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" name="edit" type="submit">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>