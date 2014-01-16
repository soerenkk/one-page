<?php

// Version
define('VERSION', '1.0.0');

/* Testing non-beta */

// Configuration
if (file_exists('config.php')) {
	require_once('config.php');
}  

// Install 
// 
// We have not created that yet
// 
//if (!defined('DIR_APPLICATION')) {
//	header('Location: install/index.php');
//	exit;
//}


?>