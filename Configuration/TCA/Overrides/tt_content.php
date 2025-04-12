<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'pep',
    'LLL:EXT:pep/Resources/Private/Language/locallang_be.xlf:content_element.group.pep',
    'after:default',
);

// 2. Registrujemo novi Content Block "Simple Teaser"
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Simple Teaser',
        'simpleteaser',
        'content-simpleteaser', // ovde možeš kasnije zameniti sa custom ikonom
    ],
    'pep',
    'after'
);

// 3. Definišemo šta se prikazuje u backend formi kad se odabere "Simple Teaser"
$GLOBALS['TCA']['tt_content']['types']['simpleteaser'] = [
    'showitem' => '
        --palette--;;general,
        header,
        subheader,
        bodytext,
        --palette--;;media,    # za slike
        --palette--;;links,    # za linkove
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.behavior,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    '
];
