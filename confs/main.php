<?php
//define('LIVE_MODE', 'true');
define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
define('CONTROLLER_PATH', 'Controller/');
define('LIB_PATH', 'Libs/');
define('MODEL_PATH', 'Model/');
define('VIEW_PATH', 'View/');
define('JS_PATH', 'Public/JS/');
define('CSS_PATH', 'Public/CSS/');
define('IMAGE_PATH', 'Public/IMAGES/');
$errorMessage = '';
$background = '/' . IMAGE_PATH . 'SYSTEM/bg.png';
$cssFileNames = ['bootstrap.min', 'menu-style', 'content-style'];
$menuPoints = [['name' => 'Home', 'link' => 'index', 'active' => 'true'],
    ['name' => 'About Me', 'link' => 'aboutme', 'active' => 'true']
];
