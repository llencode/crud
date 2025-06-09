<?php
include("connection.php");

$id = $_POST["id"] ?? "";
$name_book = $_POST["name_book"] ?? "";
$description_book = $_POST["description"] ?? "";

function showError($msg, $id, $name_book, $description_book)
{
    echo "<p style='color:red;'>$msg</p>";
    echo "<form id='backForm' method='POST' action='edit.php'>
    <input type='hidden' name='id' value='" . htmlspecialchars($id) . "'>
    <input type='hidden' name='name_book' value='" . htmlspecialchars($name_book) . "'>
    <input type='hidden' name='description' value='" . htmlspecialchars($description_book) . "'>
    <button type='submit' style='background:none;border:none;color:blue;text-decoration:underline;cursor:pointer;'>Kembali</button>
    </form>";

    exit;
}

if (empty($name_book) || $description_book === "") {
    showError("fields cannot be empty.", $id, $name_book, $description_book);
}

$stmt = $conn->prepare("UPDATE book SET name_book = ?, deskripsi = ? WHERE id = ?");
$stmt->bind_param("ssi", $name_book, $description_book, $id);

if ($stmt->execute() === TRUE) {
    header("Location:index.php");
} else {
    echo "gagal";
}

$stmt->close();
$conn->close();
?>