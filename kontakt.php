<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
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
        <h1>Kontakt</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-100 text-center">
          <p><strong><em>V prípade vašej otázky dostanete odpoveď do 2 hodín až 3 dní.</em
          ></strong></p>
        </div>
      </div>
    </section>
    <section class="container" style="display:flex;align-content:center">
      <div class="row">
        <div class="col-50"> 
          <h3>Máte otázky?</h3>
          <p style="font-size: 25px">Kontaktujte nás, pokúsime sa odpovedať čo najskôr!</p>
        </div>
        <div class="col-50 text-right">
          <h3>Napíšte nám</h3>
          <form id="contact" action="thankyou.php">
            <input type="text" placeholder="Vaše meno" id ="meno"  required><br>
            <input type="email" placeholder="Váš email" id="email" required><br>
            <textarea name="" placeholder="Vaša správa" id="sprava"></textarea><br>
            <input type="checkbox" name="" id="" required>
            <label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
            <input type="submit" value="Odoslať">
          </form>
        </div>
      </div>
    </section>
  </main>
<?php
require_once 'components/footer.php';
?>
  <script src="js/menu.js"></script>
</body>
</html>