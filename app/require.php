<?php
require_once 'libraries/Core.php';
require_once 'libraries/BaseController.php';
require_once 'libraries/Database.php';
require_once 'config/config.php';

//require all component files in the components folder
$components = glob(__DIR__ . '/components/*');

foreach ($components as $component) {
    require_once($component);
}

$init = new Core();
