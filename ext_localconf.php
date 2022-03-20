<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addPageTSConfig("
    @import 'EXT:site_package/Configuration/page.tsconfig'
");
