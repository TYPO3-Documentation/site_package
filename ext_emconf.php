<?php

$EM_CONF[$_EXTKEY] = [
    "title" => "Site Package",
    "description" =>
        "This site package is an example used to understand the TYPO3 Site Package Tutorial.",
    "category" => "templates",
    "constraints" => [
        "depends" => [
            "typo3" => "14.0.0-14.3.99",
            "fluid_styled_content" => "14.0.0-14.3.99",
            "content_blocks" => "2.0.0-2.99.99",
        ],
        "conflicts" => [],
    ],
    "autoload" => [
        "psr-4" => [
            "T3docs\\SitePackage\\" => "Classes",
        ],
    ],
    "state" => "stable",
    "uploadfolder" => 0,
    "createDirs" => "",
    "clearCacheOnLoad" => 1,
    "author" => "TYPO3 Documentation Team",
    "author_email" => "j.doe@example.org",
    "author_company" => "T3docs",
    "version" => "1.0.0",
];
