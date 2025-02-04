<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'site_package',
    'LLL:EXT:site_package/Resources/Private/Language/locallang_be.xlf:content_element.group.site_package',
    'after:default',
);
