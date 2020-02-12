<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$models = [
    'feedback' => new \App\Feedback\Model(),
    'user' => new \App\Users\Model()
];

$conditions = $_POST ?? [];

$feedbacks = $models['feedback']->get($conditions);

if ($feedbacks !== false) {
    foreach ($feedbacks as $feedback) {

        $r_array = $feedback->getData();

        $user = $models['user']->getById($r_array['user_id']);
        $r_array['name'] = $user->getName();
        $r_array['timestamp'] = date('Y/m/d H:i:s', $r_array['timestamp']);


        $response->addData($r_array);
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();