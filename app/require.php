<?php
session_start();

//Require single files
require_once 'config/config.php';

//Require all component files in the components folder
$allFiles = glob(__DIR__ . '/components/*');

//Add all files in the libraries folder to the $allFiles array
$allFiles = array_merge($allFiles, glob(__DIR__ . '/libraries/*'));

foreach ($allFiles as $component) {
    require_once($component);
}

$init = new Core();
