<?php

defined('TYPO3_MODE') or die('');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] =
    \Aoe\Becookies\Hook\BackendHook::class . '->process';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/index_ts.php']['preprocessRequest'][] =
    \Aoe\Becookies\Hook\FrontendHook::class . '->process';
