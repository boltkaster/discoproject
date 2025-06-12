<?php
require 'db/db.php';

$db = new Database('localhost', 'formular', 'root', '');
$pdo = $db->getConnection();

$qnaItems = $pdo->query("SELECT * FROM qna ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/qna.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once 'components/header.php'; ?>
<main>
    <section class="banner">
        <div class="container text-white" style="background-color: #ffffff00 !important">
            <h1>Q&A</h1>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <p><strong><em>Často kladené otázky, ktorým bola venovaná samostatná stránka</em></strong></p>
            </div>
        </div>
    </section>

    <?php
    require_once 'db/db.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add_question'])) {
        try {
            $stmt = $pdo->prepare("INSERT INTO qna (question, answer) VALUES (?, ?)");
            $stmt->execute([
                htmlspecialchars($_POST['question']),
                htmlspecialchars($_POST['answer'])
            ]);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } catch (PDOException $e) {
            echo "<div class='error'>Chyba: " . $e->getMessage() . "</div>";
        }
    }
    ?>

    <!-- Q&A Form -->
    <section class="container">
        <form method="post" class="qna-form">
            <h3>Pridať novú otázku</h3>
            <textarea id="question" name="question" placeholder="Vaša otázka" required></textarea>
            <textarea id="answer" name="answer" placeholder="Odpoveď" required></textarea>
            <button type="submit" name="add_question">Odoslať Q&A</button>
        </form>
    </section>

    <!-- Q&A List -->
    <section class="container">

        <?php if (!empty($qnaItems)): ?>
            <?php foreach ($qnaItems as $item): ?>
                <div class="accordion">
                    <div class="question"><?= htmlspecialchars($item['question']) ?></div>
                    <div class="answer">
                        <?= htmlspecialchars($item['answer']) ?>
                        <div class="qna-actions">
                            <a href="db/edit_qna.php?id=<?= $item['id'] ?>">Upraviť</a>
                            <form action="db/delete_qna.php" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <button type="submit" onclick="return confirm('Naozaj chcete vymazať túto položku?')">Vymazať</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="accordion">
                <div class="question">Momentálne žiadne otázky</div>
                <div class="answer">Skontrolujte neskôr alebo nám napíšte svoju otázku.</div>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php require_once 'components/footer.php'; ?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>