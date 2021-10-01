<?php

// Documentation test config file for "Components / Forms / Layout / Form grid / Column sizing" part
return [
    'title' => 'Column sizing',
    'url' => '%bootstrap-url%/forms/#column-sizing',
    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
        $oFactory = new \Laminas\Form\Factory();

        echo $oView->form($oFactory->create([
            'type' => 'form',
            'options' => ['row_class' => 'form-row'],
            'elements' => [
                [
                    'spec' => [
                        'name' => 'city',
                        'options' => [
                            'column' => 7,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'City',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'state',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'State',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'zip',
                        'options' => [
                            'column' => true,
                        ],
                        'attributes' => [
                            'type' => 'text',
                            'placeholder' => 'Zip',
                        ],
                    ],
                ],
            ]
        ]));
    },
];
