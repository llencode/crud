<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = (int) $_POST['id'];
        echo "error";
    }

    $stmt = $conn->prepare("DELETE FROM book WHERE id =?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $conn->query("SET @new_id = 0");

        // 2b. Update nomor ID berdasarkan urutan lama
        $conn->query("UPDATE book SET id = (@new_id := @new_id + 1) ORDER BY id");

        // 2c. Reset AUTO_INCREMENT ke nomor selanjutnya
        $conn->query("ALTER TABLE book AUTO_INCREMENT = 1");

        // Commit transaksi
        $conn->commit();
        header("Location:index.php");
        exit();
    } else {
        echo "Eerrrorr de";
    }
    $stmt->close();
    $conn->close();
}
?>