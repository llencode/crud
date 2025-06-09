<?php
include_once("connection.php");

if (isset($_POST['register'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            echo "Tidak Boleh Kosong";
            $html = "<a href='register.php'><h1>Register</h1></a>";
            echo $html;
            exit;
        }
    }

    $username = $_POST["username"] ?? "";
    $password = md5($_POST["password"] ?? "");

    $check = $conn->prepare("SELECT id FROM usr WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "user sudah terdaftar";
        $html = "<a href='register.php'><h1>Register</h1></a>";
        echo $html;
    } else {
        $stmt = $conn->prepare("INSERT INTO usr (username, psswd) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute() === TRUE) {
            header("Location:index.php");
            exit();
        } else {
            echo "Errorr input";
        }
        $stmt->close();
    }
    $check->close();
}
$conn->close();
?>