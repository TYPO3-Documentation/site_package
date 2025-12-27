<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'site_package',
    'site_package.backend.content_elements:group.site_package',
    'after:default',
);
