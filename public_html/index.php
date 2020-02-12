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
        
        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>

    </body>
</html>
