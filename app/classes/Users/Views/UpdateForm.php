<?php

namespace App\Users\Views;

class UpdateForm extends BaseForm {

    public function __construct($data = []) {
        parent::__construct($data);

        $user = \App\App::$session->getUser();
        $user_array = $user->getData();

        $this->data['attr']['method'] = 'POST';

        $this->data['callbacks'] = [
            'success' => 'form_success_edit',
            'fail' => 'form_fail_edit'
        ];

        $this->data['attr']['id'] = 'update-form';
        $this->data['buttons']['submit']['title'] = 'Atnaujinti';
        $this->data['fields']['name']['value'] = $user_array['name'];
        $this->data['fields']['surname']['value'] = $user_array['surname'];
        $this->data['fields']['email']['value'] = $user_array['email'];
        $this->data['fields']['password']['value'] = $user_array['password'];
    }


}
