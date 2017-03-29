<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ckeditor_custom/Configuration/TSconfig/page.ts">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ckeditor_custom/Configuration/TSconfig/user.ts">'
);


// Set presets
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['test_preset'] = 'EXT:ckeditor_custom/Configuration/RTE/Test.yaml';
