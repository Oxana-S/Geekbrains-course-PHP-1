<?php

define('SITE_DIR', __DIR__ . '/../');
define('CONFIG_DIR', SITE_DIR . 'config/');
define('DATA_DIR', SITE_DIR . 'data/');
define('ENGINE_DIR', SITE_DIR . 'engine/');
define('WWW_DIR', SITE_DIR . 'www/');
define('TEMPLATES_DIR', SITE_DIR . 'templates/');

define('IMG_DIR', 'img/');


define('DB_HOST', 'localhost');
define('DB_USER', 'geek_brains');
define('DB_PASS', '123123');
define('DB_NAME', 'geek_brains');


require_once ENGINE_DIR . 'f-render.php';
require_once ENGINE_DIR . 'f-db.php';
require_once ENGINE_DIR . 'news.php';

