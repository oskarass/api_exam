<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Vardas',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_symbol_limit',
                            'validate_symbol_name'
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Pavardė',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_symbol_limit',
                            'validate_symbol_name'
                        ]
                    ],
                ],
                'email' => [
                    'label' => 'El. paštas',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Slaptažodis',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'number' => [
                    'label' => 'Tel. numeris',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_mail'
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
