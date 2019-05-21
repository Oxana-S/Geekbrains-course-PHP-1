<?php
require_once('../cfg/config.php');

echo render(TPL_DIR . 'index.tpl', [
   'title' => 'ГАлерея',
   'h1' => 'Галерея',
    'content' => create_gallery(),
    'data' => date('Y')
]);


