<?php
require_once __DIR__ . '/../db/db.php';
require_once __DIR__ . '/../db/formHandler.php';

class FormController {
    private $formHandler;

    public function __construct() {
        $db = new Database('localhost', 'formular', 'root', '');
        $this->formHandler = new FormHandler($db);
    }

    public function handle($postData) {
        $error = $this->formHandler->validateForm($postData, ['meno', 'email', 'sprava']);
        if ($error) {
            return $error;
        }
        if ($this->formHandler->saveFormData($postData['meno'], $postData['email'], $postData['sprava'])) {
            header("Location: http://localhost/discoproject/thankyou.php");
            exit();
        } else {
            return "Failed to save form data.";
        }
    }
}