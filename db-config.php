<?php

/*
 * We do not want to leak the database login information to our database.
 * Thats why we creates this and put some sample info in here,
 * then to edit it when we have told Git not to watch this file.
 */

define('DB_HOST', 'localhost');
define('DB_DRIVER', 'mysql');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DB', 'db_name');

?>