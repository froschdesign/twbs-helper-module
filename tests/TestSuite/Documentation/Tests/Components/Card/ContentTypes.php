<?php

// Documentation test config file for "Components / Card / Content types" part
return [
    'title' => 'Content types',
    'url' => '%bootstrap-url%/components/card/#content-types',
    'tests' => [
        [
            'title' => 'Body',
            'url' => '%bootstrap-url%/components/card/#body',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card('This is some text within a card body.');
            },
        ],
        [
            'title' => 'Titles, text, and links',
            'url' => '%bootstrap-url%/components/card/#titles-text-and-links',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'title' => 'Card title',
                    'subtitle' => [
                        'content' => 'Card subtitle',
                        'attributes' => ['class' => 'mb-2 text-muted'],
                    ],
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'link' => [
                        'Card link',
                        'Another link',
                    ],
                ], ['style' => 'width: 18rem;']);
            },
        ],
        [
            'title' => 'Images',
            'url' => '%bootstrap-url%/components/card/#images',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                ], ['style' => 'width: 18rem;']);
            },
        ],
        [
            'title' => 'List groups',
            'url' => '%bootstrap-url%/components/card/#list-groups',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                ], ['style' => 'width: 18rem;']);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                echo $oView->card([
                    'header' => 'Featured',
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                ], ['style' => 'width: 18rem;']);
            },
        ],
        [
            'title' => 'Kitchen sink',
            'url' => '%bootstrap-url%/components/card/#kitchen-sink',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                echo $oView->card([
                    'image_top' => ['/twbs-helper-module/img/docs/image-cap.svg', ['alt' => '...',]],
                    'title' => 'Card title',
                    'text' => 'Some quick example text to build on the card title ' .
                        'and make up the bulk of the card\'s content.',
                    'listGroup' => [
                        [
                            'Cras justo odio',
                            'Dapibus ac facilisis in',
                            'Vestibulum at eros',
                        ],
                    ],
                    'link' => [
                        'Card link',
                        'Another link',
                    ],
                ], ['style' => 'width: 18rem;']);
            },
        ],
        [
            'title' => 'Header and footer',
            'url' => '%bootstrap-url%/components/card/#header-and-footer',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {

                echo $oView->card([
                    'header' => 'Featured',
                    'title' => 'Special title treatment',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Go somewhere</a>',
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // With blockquote
                echo $oView->card([
                    'header' => 'Quote',
                    'blockquote' => [
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
                        'Someone famous in <cite title="Source Title">Source Title</cite>',
                    ],
                ]);

                echo PHP_EOL . '<br/>' . PHP_EOL;

                // Centered
                echo $oView->card([
                    'header' => 'Featured',
                    'title' => 'Special title treatment',
                    'text' => 'With supporting text below as a natural lead-in to additional content.',
                    '<a href="#" class="btn btn-primary">Go somewhere</a>',
                    'footer' => ['2 days ago', ['class' => 'text-muted']],
                ], ['class' => 'text-center']);
            },
        ],
    ],
];
