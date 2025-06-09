<?php
include_once("connection.php");

if (isset($_POST["add"])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST["name_book"]) || empty($_POST["description"])) {
            echo "Tidak boleh kosong";
            $html = "<a href='add.php'><h1>Add</h1></a>";
            echo $html;
            exit;
        }
    }

    $name_book = $_POST["name_book"] ?? "";
    $description_book = $_POST["description"] ?? "";

    $check_book = $conn->prepare("SELECT id FROM book WHERE name_book = ?");
    $check_book->bind_param("s", $name_book);
    $check_book->execute();
    $check_book->store_result();

    if ($check_book->num_rows > 0) {
        echo "Data sudah ada";
        $html = "<a href='add.php'><h1>Add</h1></a>";
        echo $html;
    } else {
        $stmt = $conn->prepare("INSERT INTO book (name_book, deskripsi) VALUES (?, ?)");
        $stmt->bind_param("ss", $name_book, $description_book);

        if ($stmt->execute() === TRUE) {
            header("Location:index.php");
        } else {
            echo "Errorr input";
        }
        $stmt->close();
    }
    $check_book->close();
}
$conn->close();
?>