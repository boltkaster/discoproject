<?php
require 'db.php';
require '../qnaManager.php';

// Initialize Database and QnaManager objects
$db = new Database('localhost', 'crud', 'root', '');
$qnaManager = new QnaManager($db);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $qnaManager->updateQna($_POST['id'], $_POST['question'], $_POST['answer']);
    header("Location: ../qna.php");
    exit();
}

// Fetch Q&A item by ID
$item = $qnaManager->getQnaById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Q&A</title>
    <link rel="stylesheet" href="../css/edit_qna.css">
</head>
<body>

<div class="container">
    <h1>Edit Q&A</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">

        <label for="question">Question:</label>
        <textarea name="question" required><?= htmlspecialchars($item['question']) ?></textarea>

        <label for="answer">Answer:</label>
        <textarea name="answer" required><?= htmlspecialchars($item['answer']) ?></textarea>

        <div class="buttons">
            <button type="submit">Update</button>
            <a href="../qna.php" class="cancel">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>