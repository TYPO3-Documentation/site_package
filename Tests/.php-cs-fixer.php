<?php

$config = \TYPO3\CodingStandards\CsFixerConfig::create();
$config->setCacheFile('.Build/cache/.php_cs.cache');
$config->getFinder()
    ->in(__DIR__.'/..');
return $config;
