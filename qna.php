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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
  <main>
    <section class="banner">
      <div class="container text-white"  style="background-color: #ffffff00 !important">
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
      require_once 'db/qnaspracovanie.php'; /*/ I just insert it right before it reads /*/
      ?>
      <section class="container">
          <?php if (!empty($qnaItems)): ?> <!-- This ust basically checks if there even anything to display -->
              <?php foreach ($qnaItems as $item): ?> <!--Iterates through each item -->
                  <div class="accordion">
                      <div class="question"><?= htmlspecialchars($item['question']) ?></div>
                      <div class="answer"><?= htmlspecialchars($item['answer']) ?></div>
                  </div>
              <?php endforeach; ?>
          <?php else: ?> <!-- If nothing was found, still inserts something -->
              <div class="accordion">
                  <div class="question">Momentálne žiadne otázky</div>
                  <div class="answer">Skontrolujte neskôr alebo nám napíšte svoju otázku.</div>
              </div>
          <?php endif; ?>
      </section>
  </main>
<?php
require_once 'components/footer.php';
?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>