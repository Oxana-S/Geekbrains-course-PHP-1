<?php
require_once('../cfg/config.php');



$id = isset($_GET['id']) ? $_GET['id'] : false;
//var_dump($id);
//die();

if (!$id){
    echo 'id не передан';
    exit();
}
 echo render(TPL_DIR . 'index.tpl', [
        'title' => 'Кратинка '. $id,
        'h1' => 'Кратинка ' . $id,
        'content' => show_image($id),
        'data' => date('Y')
     ]);