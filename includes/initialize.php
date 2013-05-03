<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(__FILE__)) . DS);        
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.'includes'.DS);

defined('DATA_PATH') ? NULL : define('DATA_PATH', LIB_PATH.DS.'data' . DS);
defined('MODEL_PATH') ? NULL : define('MODEL_PATH', LIB_PATH.DS.'model' . DS);
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', LIB_PATH.DS.'view' . DS);
defined('CONTROLLER_PATH') ? NULL : define('CONTROLLER_PATH', LIB_PATH.DS.'controller' . DS);


// load config file first
require_once(LIB_PATH.'config.inc.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.'functions.php');

// load core objects
require_once(LIB_PATH.'session.php');
require_once(DATA_PATH.'mysqldatabase.php');
//require_once(LIB_PATH.DS.'database_object.php');
//
//// load database-related classes
require_once(MODEL_PATH.'user.php');
require_once(MODEL_PATH.'tag.php');

?>