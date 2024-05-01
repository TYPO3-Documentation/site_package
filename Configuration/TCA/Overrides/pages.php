<?php

defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'site_package';
    /**
     * Default PageTS for site_package
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/Page.tsconfig',
        'TYPO3 Documentation Team Site Package Example'
    );
});
