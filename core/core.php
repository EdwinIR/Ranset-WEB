<?php

session_start();
date_default_timezone_set('America/Caracas');


define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','prueba');
define('HTML_DIR','html/');

require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/LostpassTemplate.php');

?>