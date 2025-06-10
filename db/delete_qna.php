<?php
require 'db.php';
require '../qnaManager.php';

// Initialize Database and QnaManager objects
$db = new Database('localhost', 'crud', 'root', '');
$qnaManager = new QnaManager($db);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $qnaManager->deleteQna($_POST['id']);
    header("Location: ../qna.php");
    exit();
}
?>