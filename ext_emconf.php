<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package',
    'description' => 'This site package is an example used to understand the TYPO3 Site Package Tutorial',
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
            'T3docs\\SitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 Documentation Team',
    'author_email' => 'lina.wolf@typo3.org',
    'author_company' => 'T3docs',
    'version' => '1.0.0',
];
