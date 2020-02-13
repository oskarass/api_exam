<?php

use App\App;

require '../../../bootloader.php';

// Check user authorization
if (!App::$session->userLoggedIn()) {
    $response = new \Core\Api\Response();
    $response->addError('You are not authorized!');
    $response->print();
}

// Filter received data
$form = (new \App\Feedback\Views\ApiForm())->getData();
$filtered_input = get_form_input($form);
validate_form($filtered_input, $form);

/**
 * If request passes validation
 * this function is automatically
 * called
 * 
 * @param type $filtered_input
 * @param type $form
 */
function form_success($filtered_input, $form) {
    $response = new \Core\Api\Response();
    $feedback = new \App\Feedback\Feedback();
    $models = [
        'feedback' => new \App\Feedback\Model(),
        'user' => new \App\Users\Model()
    ];
    $user = \App\App::$session->getUser();

    $feedback->setUserId($user->getId());
    $feedback->setTimestamp(time());
    $feedback->setFeedback($filtered_input['feedback']);

    $models['feedback']->insert($feedback);

    $r_array = $feedback->getData();
    $user = $models['user']->getById($r_array['user_id']);
    $r_array['name'] = $user->getName();
    $r_array['timestamp'] = date('Y/m/d H:i:s', $r_array['timestamp']);

    $sorted = [
        'name' => $r_array['name'],
        'feedback' => $r_array['feedback'],
        'timestamp' => $r_array['timestamp'],
    ];

    $response->addData($sorted);

    $response->setData($sorted);

    $response->print();
}

/**
 * If request fails validation
 * this function is automatically
 * called
 * 
 * @param type $filtered_input
 * @param type $form
 */
function form_fail($filtered_input, $form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->print();
}
