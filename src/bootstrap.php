<?php

use BlackFramework\Core\AutoLoader;

include '../vendor/blackframework/core/src/AutoLoader.php';

$array = include '../vendor/composer/autoload_psr4.php';


$autoloader = new AutoLoader();

foreach ($array as $key => $value) {
    $autoloader->registerNamespace(
        $key,
        $value
    );
}
