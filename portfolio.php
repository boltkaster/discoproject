<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moja stránka</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php
    require_once 'components/header.php';
    ?>

        <main>
            <section class="banner">
                <div class="container text-white" style="background-color: #ffffff00 !important">
                    <h1>Portfólio</h1>
                </div>
            </section>
              <section class="container">
                <div class="row">
                  <div class="col-25 portfolio text-white text-center" id="portfolio-1">
                      Reaction Speed
                  </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-2">
                        Half Light
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-3">
                        Esprit de Corps
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-4">
                        Suggestion
                    </div>
                </div>
                <div class="row">
                    <div class="col-25 portfolio text-white text-center" id="portfolio-5">
                        Volition
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-6">
                        Logic
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-7">
                        Conceptualisation
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-8">
                        Savoir Faire
                    </div>
                </div>
            </section>   

        </main>
        <?php
        require_once 'components/footer.php';
        ?>
    <script src="js/menu.js"></script>
    </body>