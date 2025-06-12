<?php

// Qna entity class
class Qna {
    public $id;
    public $question;
    public $answer;

    public function __construct($id, $question, $answer) {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
    }
}
class QnaManager
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function getQnaById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM qna WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateQna($id, $question, $answer):bool
    {
        $stmt = $this->db->prepare("UPDATE qna SET question = ?, answer = ? WHERE id = ?");
        return $stmt->execute([$question, $answer, $id]);
    }

    public function deleteQna($id):bool
    {
        $stmt = $this->db->prepare("DELETE FROM qna WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
