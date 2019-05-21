<?php

require_once('../cfg/config.php');

echo render(TPL_DIR . 'index.tpl', [
    'title' => 'Контакты',
    'h1' => 'Контакты',
    'content' => render( TPL_DIR . 'contacts.tpl'),
    'data' => date('Y')

]);