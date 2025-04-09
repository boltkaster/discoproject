<?php
namespace App;

use App\Db\Database;
use PDO;

class QnA extends Database {
    public function getAllQnAs(): array {
        $conn = $this->getConnection();
        $stmt = $conn->query("SELECT * FROM qna ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }
}
