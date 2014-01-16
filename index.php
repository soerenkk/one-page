<?php

// Version
define('VERSION', '1.0.0');

// Start sessionen \\
session_start();

/* Testing non-beta */

// Configuration
if (file_exists('config.php')) {
	require_once('config.php');
}  

require_once(DIR_ROOT . '/System/Autoloader.php');
// The system requires the namespace \\
System\Autoloader::register();


// Install 
// 
// We have not created that yet
// 
//if (!defined('DIR_APPLICATION')) {
//	header('Location: install/index.php');
//	exit;
//}


?>