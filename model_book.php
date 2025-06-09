<?php
function getAllbook()
{
    require "connection.php";
    $sql = "SELECT id, name_book, deskripsi FROM book ORDER BY name_book ASC";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("failed");
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $book = [];

    while ($row = $result->fetch_assoc()) {
        $book[] = $row;
    }
    return $book;
}

function getBooksBySearch($term)
{
    global $pdo; // Assuming you use PDO
    $sql = "SELECT * FROM books WHERE name_book LIKE :term OR deskripsi LIKE :term";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['term' => "%$term%"]);
    return $stmt->fetchAll();
}
?>