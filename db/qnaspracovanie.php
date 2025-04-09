<?php
require_once __DIR__ . '/../db/Database.php';
require_once __DIR__ . '/../src/qnaclass.php';

use App\QnA;

$qna = new QnA();
$qnaItems = $qna->getAllQnAs();