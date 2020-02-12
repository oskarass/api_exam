<?php

namespace App\Reviews\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'review' => [
                    'label' => 'Feedback',
                    'type' => 'text',
                ],
                'rating' => [
                    'label' => 'Rating (1-5)',
                    'type' => 'select',
                    'options' => [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ]
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
