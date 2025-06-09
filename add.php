<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>
<link rel="stylesheet" href="src/main.css">

<body>
    <div class="container-fluid">
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <h1>Add Item</h1>
            </div>
        </div>
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <form action="function_add.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>name book</h4>
                        </label>
                        <input type="text" name="name_book" class="form-control" id="exampleFormControlInput1"
                            placeholder="name book">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>description</h4>
                        </label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                            placeholder="description"></textarea>

                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" name="add" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>