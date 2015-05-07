<?php

// Get Base URI
$baseUri = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']));
$http = str_replace(array('/', '\\'), '/', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $baseUri . '/');

// HTTP
define('HTTP_SERVER', $http);

// HTTPS
define('HTTPS_SERVER', $http);

// DIR
define('OP_ROOT', __DIR__);
define('DIR_APPLICATION', OP_ROOT . '/catalog/');
define('DIR_SYSTEM',      OP_ROOT . '/system/');
define('DIR_LANGUAGE',    OP_ROOT . '/catalog/language/');
define('DIR_TEMPLATE',    OP_ROOT . '/catalog/view/theme/');
define('DIR_CONFIG',      OP_ROOT . '/system/config/');
define('DIR_IMAGE',       OP_ROOT . '/image/');
define('DIR_CACHE',       OP_ROOT . '/system/cache/');
define('DIR_DOWNLOAD',    OP_ROOT . '/system/download/');
define('DIR_UPLOAD',      OP_ROOT . '/system/upload/');
define('DIR_MODIFICATION', OP_ROOT . '/system/modification/');
define('DIR_LOGS',        OP_ROOT . '/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PREFIX', 'oc_');
