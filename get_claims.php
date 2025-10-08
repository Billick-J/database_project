<?php
include 'db.php';

$query = "
SELECT ci.id, c.firstname AS claimer_firstname, c.lastname AS claimer_lastname,
       i.item_name, i.description, f.room_no, f.found_at
FROM claimed_items ci
JOIN claimer c ON ci.claimer_id = c.claimer_id
JOIN item i ON ci.item_id = i.item_id
JOIN found f ON ci.found_id = f.found_id
ORDER BY ci.id DESC
";

$stmt = $pdo->query($query);
$claims = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($claims);
?>
