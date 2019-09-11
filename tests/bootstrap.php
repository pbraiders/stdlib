<?php

declare(strict_types=1);

/** @var ROOT_PATH document root path */
defined('ROOT_PATH') || define('ROOT_PATH', realpath(dirname(__DIR__)));

/** @var PBR_PATH PBR path */
defined('PBR_PATH') || define('PBR_PATH', \ROOT_PATH . \DIRECTORY_SEPARATOR . 'src');

// Includes the Composer autoloader
require realpath(\ROOT_PATH . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php');
