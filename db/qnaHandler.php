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
        $this->db = $database->getConnection(); // Stores the database connection inside the $db variable.
    }

    public function getQnaById($id)
    {
        // Prepare an SQL query to select a Q&A entry by ID.
        $stmt = $this->db->prepare("SELECT * FROM qna WHERE id = ?"); // PDO query, is a placeholder for ID
        $stmt->execute([$id]); // Uses ID, which we got as an argument
        return $stmt->fetch(); // returns the first row, if nothing - false.
    }

    public function updateQna($id, $question, $answer):bool
    {
        $stmt = $this->db->prepare("UPDATE qna SET question = ?, answer = ? WHERE id = ?"); // PDO query, the same as the ast one but with UPDATE
        return $stmt->execute([$question, $answer, $id]);
    }

    public function deleteQna($id):bool
    {
        $stmt = $this->db->prepare("DELETE FROM qna WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
