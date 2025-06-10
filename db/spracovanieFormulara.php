
<?php
require 'db.php';
require 'formHandler.php';

// Initialize Database and FormHandler
$db = new Database('localhost', 'formular', 'root', '');
$formHandler = new FormHandler($db);

// Validate form inputs
$error = $formHandler->validateForm($_POST, ['meno', 'email', 'sprava']);
if ($error) {
    echo $error; // Display validation error
    exit();
}

// Save form data to the database
if ($formHandler->saveFormData($_POST['meno'], $_POST['email'], $_POST['sprava'])) {
    header("Location: http://localhost/discoproject/thankyou.php");
} else {
    echo "Failed to save form data.";
}
?>
?>