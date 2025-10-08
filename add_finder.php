<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dept = $_POST['department'];

    $stmt = $pdo->prepare("INSERT INTO finder (firstname, lastname, department) VALUES (?, ?, ?)");
    $stmt->execute([$fname, $lname, $dept]);

    echo "Finder added successfully.";
}
?>
