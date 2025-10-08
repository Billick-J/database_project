<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    $stmt = $pdo->prepare("INSERT INTO claimer (firstname, lastname) VALUES (?, ?)");
    $stmt->execute([$fname, $lname]);

    echo "Claimer added successfully.";
}
?>
