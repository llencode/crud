<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="src/main.css">

<body>
    <div class="container-fluid">
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <h1>Register</h1>
            </div>
        </div>
        <div class="row mt-5 ms-5">
            <div class="col-6">
                <form action="function_register.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>user</h4>
                        </label>
                        <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                            placeholder="user">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>password</h4>
                        </label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                            placeholder="password">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" name="register" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>