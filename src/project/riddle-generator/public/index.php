<?php

define('PROJECT_BASE_DIR', realpath('../'));
define('SRC_ROOT_DIR', realpath(PROJECT_BASE_DIR . DIRECTORY_SEPARATOR . '../../'));
set_include_path(get_include_path() . PATH_SEPARATOR . PROJECT_BASE_DIR . PATH_SEPARATOR . SRC_ROOT_DIR);

try {
    require 'vendor/autoload.php';

    $riddleGenerator = new Dbb\RiddleGenerator();

    $riddleGenerator->run();
} catch (\Exception $e) {
    //for debugging
    ini_set('display_errors', 1);
    throw $e;
}
