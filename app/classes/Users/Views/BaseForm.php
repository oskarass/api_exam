<?php

namespace App\Users\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'label' => 'Name',
                    'type' => 'text',
                ],
                'surname' => [
                    'label' => 'Surname',
                    'type' => 'text',
                ],
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                ],

            ],

            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}
