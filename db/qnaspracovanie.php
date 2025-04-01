<?php
$host = "localhost";
$dbname = "formular";
$port = 3306;
$username = "root";
$password = ""; // basic stuff, just like in spracovanieFormulara.php (copied directly from the presentation)

try {
    $conn = new PDO( // connect with database
        "mysql:host=$host;dbname=$dbname;port=$port",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $stmt = $conn->query("SELECT * FROM qna ORDER BY created_at DESC"); // Query to get all items. Sorted by created_at (I accidentally created 4 rows so why not)
    $qnaItems = $stmt->fetchAll(); // The result gets fetched into array

} catch (PDOException $e) { // Default exception that displays error message
    die("Chyba databázy: " . $e->getMessage());
}