<?php
class FormHandler {
    private $db; // PDO connection object
    // Constructor initializes the database connection
    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    // Validate form inputs
    public function validateForm($data, $requiredFields) {
        foreach ($requiredFields as $field) {
            // Check if any required field is empty
            if (empty($data[$field])) {
                return "$field is required.";
            }
        }
        return null; // Return null if validation passes
    }

    // Process form data and save to database
    public function saveFormData($name, $email, $message): bool{
        // Prepare the SQL query for inserting data
        $stmt = $this->db->prepare("INSERT INTO udaje (meno, email, sprava) VALUES (?, ?, ?)");

        // Execute the query with provided data
        return $stmt->execute([$name, $email, $message]);
    }
}