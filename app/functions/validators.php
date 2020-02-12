<?php

function validate_login($filtered_input, &$form) {
    $login_success = \App\App::$session->login(
            $filtered_input['email'],
            $filtered_input['password']
    );

    if (!$login_success) {
        $modelUser = new \App\Users\Model();
        $users = $modelUser->get(['email' => $filtered_input['email']]);
        if(!$users) {
            if(empty($filtered_input['email'])) {
                $form['fields']['email']['error'] = 'Laukas negali būti tuščias';
            } else {
                $form['fields']['email']['error'] = 'Tokio vartotojo nėra';
            }
            return false;
        } else {
            $form['fields']['password']['error'] = 'Neteisingas slaptažodis!';
            $form['fields']['password']['value'] = '';
            return false;
        }
    }

    return true;
}

function validate_mail($field_value, &$field) {
    $modelUser = new \App\Users\Model();
    $users = $modelUser->get(['email' => $field_value]);
    if ($users) {
        $field['error'] = 'Vartotojas tokiu el.paštu jau registruotas!';
        return false;
    }
    
    return true;
}


