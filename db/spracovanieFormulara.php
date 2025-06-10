<?php
require_once __DIR__ . '/../controllers/FormController.php';

$formController = new FormController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $result = $formController->handle($_POST);
    if ($result) {
        echo $result;
        exit();
    }
}