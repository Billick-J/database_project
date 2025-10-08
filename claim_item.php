<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $claimer_id = $_POST['claimer_id'];
    $item_id = $_POST['item_id'];
    $found_id = $_POST['found_id'];

    $stmt = $pdo->prepare("INSERT INTO claimed_items (claimer_id, item_id, found_id) VALUES (?, ?, ?)");
    $stmt->execute([$claimer_id, $item_id, $found_id]);

    echo "Item successfully claimed.";
}
?>
