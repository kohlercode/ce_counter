<?php

/**
 * Author: Simon Köhler (KOHLERCODE LLC)
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Counter Content Element',
    'description' => 'Provides a new content element that displays a visual counter in the frontend. Three layouts are integrated, including a bare Bootstrap template. Custom templates can be easily added. Multiple counters can be displayed on the same page, and the format and labeling can be customized.',
    'category' => 'fe',
    'author' => 'Simon Köhler',
    'author_email' => 'simon@kohlercode.com',
    'author_company' => 'kohlercode.com',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99'
        ],
        'conflicts' => [

        ],
        'suggests' => [

        ],
    ]
];
