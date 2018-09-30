<?php
// HTTP
define('HTTP_SERVER', '*');

// HTTPS
define('HTTPS_SERVER', '*');

// DIR
define('DIR_APPLICATION', '/app/catalog/');
define('DIR_SYSTEM', '/app/system/');
define('DIR_IMAGE', '/app/opencart/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'us-cdbr-gcp-east-01.cleardb.net');
define('DB_USERNAME', 'b71ef29af384a5');
define('DB_PASSWORD', 'd61e38fcdff642f');
define('DB_DATABASE', 'gcp_409e4fb4f0e2b860900a');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
