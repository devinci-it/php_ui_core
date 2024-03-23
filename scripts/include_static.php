<?php
// scripts/include_static.php

// Define the base path of your library
$basePath = __DIR__ . '/../';

// Autoload the static assets from your library
require_once $basePath . 'vendor/autoload.php';

use Composer\Autoload\ClassLoader;

// Register the asset directory
$classLoader = new ClassLoader();
$classLoader->addPsr4('Devinci\\Uicore\\', $basePath . 'src/UICore');
$classLoader->register();
