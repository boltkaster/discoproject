<?php
require 'db.php';
require 'qnaHandler.php';

// Initialize Database and QnaManager objects
$db = new Database('localhost', 'formular', 'root', '');
$qnaManager = new QnaManager($db);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Use QnaManager to delete the Q&A entry by ID
    $qnaManager->deleteQna($_POST['id']);
    // Redirect to the Q&A page after deletion
    header("Location: ../qna.php");
    exit();
}