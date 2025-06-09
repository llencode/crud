<?php
require 'model_book.php';

$searchTerm = isset($_POST['query']) ? trim($_POST['query']) : '';

$books = getAllbook(); // This returns all books; you can also create a new getBooksBySearch($term) if needed

$filtered = [];
if ($searchTerm !== '') {
    foreach ($books as $book) {
        if (stripos($book['name_book'], $searchTerm) !== false || stripos($book['deskripsi'], $searchTerm) !== false) {
            $filtered[] = $book;
        }
    }
} else {
    $filtered = $books;
}

$counter = 1;
foreach ($filtered as $book) {
    echo '<tr>';
    echo '<td>' . $counter++ . '</td>';
    echo '<td>' . htmlspecialchars($book['name_book']) . '</td>';
    echo '<td>' . htmlspecialchars($book['deskripsi']) . '</td>';
    echo '<td>
            <form action="edit.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="' . $book['id'] . '">
                <button type="submit" class="btn btn-sm btn-warning">Edit</button>
            </form>
            <form action="function_delete.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="' . $book['id'] . '">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>';
    echo '</tr>';
}
?>