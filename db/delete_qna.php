    <?php
require_once __DIR__ . '/../controllers/qnaController.php';

$qnaController = new QnaController();

if (isset($_POST['id'])) {
    $qnaController->delete($_POST['id']);
}