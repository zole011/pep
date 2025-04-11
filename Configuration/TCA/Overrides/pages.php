<?php
defined('TYPO3') or die();

return (function () {
    // Registracija PageTSConfig datoteke (ispravan path)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'pep',
        'Configuration/TsConfig/Page/page.minimal.typoscript',
        'EXT:pep :: Strip down available fields from content elements to bare minimum.'
    );

    // Resetovanje dostupnih backend layout-a
    $GLOBALS['TCA']['pages']['columns']['backend_layout']['config']['items'] = [['', '']];
    $GLOBALS['TCA']['pages']['columns']['backend_layout_next_level']['config']['items'] = [['', '']];

    // Dodavanje novog polja "Disable menu click"
    $GLOBALS['TCA']['pages']['columns']['author'] = [
        'exclude' => true,
        'l10n_mode' => 'exclude',
        'label' => 'Disable menu click',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                ['']
            ]
        ]
    ];
})();