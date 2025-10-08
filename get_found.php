<?php
include 'db.php';

$query = "
SELECT f.found_id, i.item_name, i.description, f.room_no, f.found_at,
       fi.firstname AS finder_firstname, fi.lastname AS finder_lastname, fi.department
FROM found f
JOIN item i ON f.item_id = i.item_id
JOIN finder fi ON f.finder_id = fi.finder_id
ORDER BY f.found_at DESC
";

$stmt = $pdo->query($query);
$found_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($found_items);
?>
