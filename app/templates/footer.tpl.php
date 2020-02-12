<?php

use App\App;

if (App::$session->userLoggedIn()) {
    $user = App::$session->getUser();
    $full_name = $user->getName() . ' ' . $user->getSurname();
}
?>

<span>&copy; <?php print date('Y') . ' ' . ($full_name ?? 'Yandex Taxi') ?>, all rights reserved.</span>