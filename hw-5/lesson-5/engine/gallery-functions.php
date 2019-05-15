<?php
/* *******************************************************
Функции() для работы с галереей, методом получение строк
путей к файлам с картинками из папки с этими картинками
******************************************************* */

/*
createPath() - создает массив с путями для каждой картинки */

function createPath($dir_with_files)
{
    $path_to_dir = $dir_with_files;
//    var_dump($dir_with_files);
//    die();
    $files_names = scandir($path_to_dir);
    $amount_files = sizeof($files_names);

    for ($i = 0; $i < $amount_files; $i++) {

        $files_names[$i] = $path_to_dir . $files_names[$i];
    }
    //scandir() в первые два элемента всегда пишет "." и ".." ;
    //убираем эти значения из массива
    unset($files_names[0]);
    unset($files_names[1]);
    // возвращаем индексацию массива с "0"
    $files_names = array_values($files_names);

    return $files_names;
}

/* **********************************

galleryBuild() - выводит саму галерею. */
function galleryBuild($files_names)
{
    foreach ($files_names as $imgPath) {
        echo "<a href=\"$imgPath\" target=\"_blank\"> <img src=\"$imgPath\" width='400px'></a>";

    }
}

/* ***************************************************************
Вариант -1 Используем эту функцию, она ссылается на функцию render()

galleryCreate() - создаёт галерею из шаблона */

function galleryCreate($files_name)
{
    $result = '';
    $files = createPath($files_name);
    foreach ($files as $file) {
        if (is_file($file)) {
            $result .= render(TPL_DIR . 'gallery-item.txt', [
                'source' => $file
            ]);
        }
    }
    return $result;
}

/* **************************************************************
Вариант-2 Без исподьзования render()
НЕ САМЫй ЛУЧШИЙ ВАРИАНТ, ПОСКОЛКУ HTML код пишется в теле функции

my_galleryCreate - создаёт галерею из шаблона */

function my_galleryCreate($dir_with_files)
{
    $img_sPath_s = createPath($dir_with_files);
    foreach ($img_sPath_s as $key) {
        $result .= "<a href=\"$key\" target=\"_blank\"> <img src=\"$key\" width='400px'></a>";
    }
    return $result;
}