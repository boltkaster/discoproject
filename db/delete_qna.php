<?php
require 'db.php';

$db = new Database('localhost', 'crud', 'root', '');
$pdo = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("DELETE FROM qna WHERE id = ?");
    $stmt->execute([$_POST['id']]);
}

header("Location: ../qna.php");
exit();
?>