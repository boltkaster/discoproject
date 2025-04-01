<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
    <main>
      <section class="slides-container">
        <div class="slide fade">
          <img src="img/revachol.jpg">
          <div class="slide-text">
            Disco Elysium
          </div>
        </div>
        
        <div class="slide fade">
          <img src="img/concept.jpg">
          <div class="slide-text">
            Disco Elysium
          </div>
        </div>
        
        <div class="slide fade">
          <img src="img/grid-5.png">
          <div class="slide-text">
            Disco Elysium
          </div>
        </div>
        
        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
        
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <p><strong><em>"I am a relatively median lifeform, while you are extreme, all-engulfing madness. A volatile simian nervous system, ominously new to the planet."</em></strong></p>
          </div>
        </div>
      </section>
      <section class="container" style="background-color:black !important">
        <div class="row">
          <div class="col-50">
            <h2 align="center">Disco Elysium</h2>
          </div>
          <div class="col-50">
            <p>is a 2019 role-playing video game developed and published by ZA/UM. Inspired by Infinity Engine-era games, particularly Planescape: Torment, the game was written and designed by a team led by Estonian novelist Robert Kurvitz and features an art style based on oil painting with music by the English band British Sea Power.</p>
            <p>Disco Elysium is a non-traditional role-playing game featuring very little combat. Instead, events are resolved through skill checks and dialogue trees via a system of 24 skills that represent different aspects of the protagonist, such as his perception and pain threshold. In addition, a system called the Thought Cabinet represents his other ideologies and personality traits, with players having the ability to freely support or suppress them. The game is based on a tabletop role-playing game setting that Kurvitz had previously created, later forming ZA/UM in 2016 to adapt it into a video game.</p>
          </div>
        </div>
      </section>
    </main>

<?php
require_once 'components/footer.php';
?>

    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
</body>