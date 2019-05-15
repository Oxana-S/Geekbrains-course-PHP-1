<?php

require_once('../cfg/config.php');

echo render(TPL_DIR . 'index-tpl.txt', [
    'title' => 'Контакты',
    'h1' => 'Контакты',
    'content-0' => render( TPL_DIR . 'contacts-tpl.txt'),
    'data' => date('Y')

]);