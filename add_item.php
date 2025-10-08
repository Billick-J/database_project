<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO item (item_name, description) VALUES (?, ?)");
    $stmt->execute([$item_name, $description]);

    echo "Item added successfully.";
}
?>
