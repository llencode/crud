<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="src/main.css">

<body>
    <div class="container-fluid d-flex 
         align-items-center 
         justify-content-center 
         min-vh-100">
        <form action="function_login.php" method="POST">
            <h1 class="text-center">Login</h1>
            <label for="exampleFormControlInput1" class="form-label">User</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="user">

            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword">
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <br>
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="register.php" role="button">Register</a>
            </div>
        </form>
    </div>
</body>

</html>