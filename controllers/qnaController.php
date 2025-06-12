<?php
require_once __DIR__ . '/../db/db.php';
require_once __DIR__ . '/../db/qnaHandler.php';

class QnaController {
    private $qnaManager;

    public function __construct() {
        $db = new Database('localhost', 'formular', 'root', '');
        $this->qnaManager = new QnaManager($db);
    }

    public function edit($id, $postData = null) {
        if ($_SERVER["REQUEST_METHOD"] === "POST" && $postData) {
            $this->qnaManager->updateQna($postData['id'], $postData['question'], $postData['answer']);
            header("Location: ../qna.php");
            exit();
        }
        return $this->qnaManager->getQnaById($id);
    }

    public function delete($id) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->qnaManager->deleteQna($id);
            header("Location: ../qna.php");
            exit();
        }
    }
}