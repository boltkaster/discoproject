<?php
require_once __DIR__ . '/../controllers/qnaController.php';

$qnaController = new QnaController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $qnaController->edit($_POST['id'], $_POST);
} else {
    $item = $qnaController->edit($_GET['id']);
}
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
        <textarea id="question" name="question" required><?= htmlspecialchars($item['question']) ?></textarea>

        <label for="answer">Answer:</label>
        <textarea id="answer" name="answer" required><?= htmlspecialchars($item['answer']) ?></textarea>

        <div class="buttons">
            <button type="submit">Update</button>
            <a href="../qna.php" class="cancel">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>