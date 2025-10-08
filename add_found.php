<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id'];
    $room_no = $_POST['room_no'];
    $finder_id = $_POST['finder_id'];
    $found_at = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare("INSERT INTO found (item_id, room_no, finder_id, found_at) VALUES (?, ?, ?, ?)");
    $stmt->execute([$item_id, $room_no, $finder_id, $found_at]);

    echo "Found item recorded successfully.";
}
?>
