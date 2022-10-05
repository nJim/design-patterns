<?php

/**
 * @file
 * Example of a class with multiple instances.
 */

require_once 'AppSettings.php';

$settings = new AppSettings();
$configs = new AppSettings();
$settings->setTheme('dark');
echo $settings->getTheme() . "\n";
echo $configs->getTheme() . "\n";
