<?php
include 'connect.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM product_database WHERE id = ?");
$stmt->execute([$id]);

header('Location: index.php');
exit;
?>