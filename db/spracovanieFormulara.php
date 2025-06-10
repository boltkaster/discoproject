<?php
require 'db.php';

// Initialize Database object
$db = new Database('localhost', 'formular', 'root', '');
$pdo = $db->getConnection();

$meno = $_POST["meno"];
$email = $_POST["email"];
$sprava = $_POST["sprava"];

$sql = "INSERT INTO udaje (meno, email, sprava) VALUES (?, ?, ?)";
$statement = $pdo->prepare($sql);
try {
    $insert = $statement->execute([$meno, $email, $sprava]);
    header("Location: http://localhost/discoproject/thankyou.php");
    return $insert;
} catch (Exception $exception) {
    return false;
}
?>