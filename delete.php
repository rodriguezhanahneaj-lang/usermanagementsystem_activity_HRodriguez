<?php
include 'dbcon.php';

$id = (int)($_GET['id'] ?? 0);

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php?msg=deleted");
exit;
