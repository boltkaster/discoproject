<?php
class FormHandler {
    private $db;
    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function validateForm($data, $requiredFields) {
        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                return "$field is required.";
            }
        }
        return null;
    }

    public function saveFormData($name, $email, $message): bool{
        $stmt = $this->db->prepare("INSERT INTO udaje (meno, email, sprava) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $message]);
    }
}