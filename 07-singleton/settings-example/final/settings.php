<?php

/**
 * @file
 * Example of using a singleton.
 */

require_once 'AppSettings.php';

$settings = AppSettings::getInstance();
$configs = AppSettings::getInstance();
$settings->setTheme('dark');
echo $settings->getTheme() . "\n";
echo $configs->getTheme() . "\n";
