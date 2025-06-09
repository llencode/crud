<?php
session_start();
include("connection.php");

$username = $_POST['username'];
$password = md5($_POST['password']); // Consider using password_hash instead of md5 for stronger security

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM usr WHERE username = ? AND psswd = ?");
$stmt->bind_param("ss", $username, $password); // "ss" means two string parameters

// Execute and fetch result
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['usr'] = $username;
    $_SESSION['passwd'] = $password;

    header('Location: index.php');
    exit();
} else {
    header('Location: login.php');
    echo "gagal login";
    exit();
}
?>