<?php

// Autoload the static assets
include_once __DIR__ . '/../vendor/autoload.php';

use Composer\Autoload\ClassLoader;

// Register the asset directory
$classLoader = new ClassLoader();
$classLoader->add('Devinci\\Uicore\\', __DIR__ . '/../../../../../src/');
$classLoader->register();
