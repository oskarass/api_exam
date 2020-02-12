<?php

require '../bootloader.php';

use App\App;

$createForm = new \App\Feedback\Views\CreateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atsiliepimai</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>

<main>
    <section class="wrapper">
        <div class="block">
            <h1>Atsiliepimai:</h1>

            <div id="person-table">
                <table>
                    <thead>
                    <tr>
                        <th>Komentaras</th>
                        <th>Data</th>
                        <th>Vardas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Rows Are Dynamically Populated -->
                    </tbody>
                </table>
            </div>
        </div>
        <?php

        if (App::$session->userLoggedIn()): ?>
        <div class="block">
            <?php print $createForm->render(); ?>
        </div>
        <?php else: ?>
            <p>Norite parašyti komentarą? <a href="register.php">Užsiregistruokite</a></p>
        <?php endif; ?>
    </section>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/feedback.js"></script>
</body>
</html>
