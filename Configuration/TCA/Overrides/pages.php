<?php
defined('TYPO3') || die();

/**
 * Default PageTS for site_package
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'site_package',
    'Configuration/TsConfig/Page/Page.tsconfig',
    'TYPO3 Documentation Team Site Package Example'
);
