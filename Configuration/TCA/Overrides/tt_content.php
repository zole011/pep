<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'pep',
    'LLL:EXT:pep/Resources/Private/Language/locallang_be.xlf:content_element.group.pep',
    'after:default',
);