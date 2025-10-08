<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM item ORDER BY item_id DESC");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($items);
?>
