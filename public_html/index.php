<?php
require '../bootloader.php';

use App\App;

$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>
        <main>
            <div class="bg-image"></div>
            <section class="wrapper">
                <div class="services">
                    <div class="service-card">
                        <img class="card-img" src="/media/img/service1.jpeg">
                        <h4 class="service-type">PASLAUGA</h4>
                        <p class="service-text">Paslaugos aprasymas</p>
                    </div>
                    <div class="service-card">
                        <img class="card-img" src="/media/img/service2.jpeg">
                        <h4 class="service-type">PASLAUGA</h4>
                        <p class="service-text">Paslaugos aprasymas</p>
                    </div>
                    <div class="service-card">
                        <img class="card-img" src="/media/img/service3.jpeg">
                        <h4 class="service-type">PASLAUGA</h4>
                        <p class="service-text">Paslaugos aprasymas</p>
                    </div>
                </div>
            </section>
        </main>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2194261566797!2d25.33569661534373!3d54.723355078378496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1sen!2slt!4v1581530749590!5m2!1sen!2slt" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>

    </body>
</html>
