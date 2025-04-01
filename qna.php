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
      <section class="container">
      <div class="accordion">
        <div class="question">Ako môžem prísť do kontaktu s ostatnými?</div>
        <div class="answer">Máme stránku určenú len na tento účel, všetky informácie nájdete v navigačnom paneli v časti „Kontakt“ alebo v footere tejto stránky.</div>
      </div>
      <div class="accordion">
        <div class="question">Je to legálne?</div>
        <div class="answer">Áno, určite! ZA/UM nevydalo vyhlásenie týkajúce sa neoficiálneho obsahu a my si nenárokujeme žiadne vlastníctvo. Z právneho hľadiska sme bez škvŕn.</div>
      </div>
      <div class="accordion">
        <div class="question">Existujú aj iné stránky, ako je táto?</div>
        <div class="answer">Som si istý, že podobných wiki a fanúšikovských stránok je oveľa viac, ale som si istý, že táto bude dostatočne jedinečná.</div>
      </div>
    </section>
    </section>
  </div>
  </main>
<?php
require_once 'components/footer.php';
?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>