<?php

//Model (for connexion data, see unversionned db.php)
define('DB_USER', getenv('DB_USER') ? getenv('DB_USER') : 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '');
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'tuto_mvc');
define('DB_NAME', getenv('DB_NAME') ? getenv('DB_NAME') : 'tuto_mvc');

//View
define('APP_VIEW_PATH', __DIR__ . '/../src/View/');

// database dump file path for automatic import
define('DB_DUMP_PATH', __DIR__ . '/../database.sql');
