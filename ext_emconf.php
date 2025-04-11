<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'pep',
    'description' => 'pep fluid page template',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gmbit\\Pep\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Zoran',
    'author_email' => 'zoran.it@gmail.com',
    'author_company' => 'gmbit',
    'version' => '1.0.0',
];
