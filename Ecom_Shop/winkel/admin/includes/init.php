<?php

require_once("db_object.php");
require_once("session.php");
require_once("cartClass.php");
require_once("orderClass.php");
require_once("productClass.php");
require_once("userClass.php");
require_once("categoryClass.php");
require_once("functions.php");
require_once("config.php");
require_once("database.php");



defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', __DIR__);

//defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT . DS . 'images');





?>