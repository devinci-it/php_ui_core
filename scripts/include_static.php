<?php
// scripts/include_static.php

// Autoload the static assets
require_once __DIR__ . '/../vendor/autoload.php';

use Composer\Autoload\ClassLoader;

// Register the asset directory
$classLoader = new ClassLoader();
$classLoader->addPsr4('Devinci\\Uicore\\', __DIR__ . '/../../src/UICore');
$classLoader->register();
