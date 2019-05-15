<?php

// ** функция() - создает соединение с базой,
// используя константы для подключения из config.php
function createConnection()
{
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // устанавливаем правильную кодировку
	mysqli_query($db, "SET CHARACTER SET 'utf8'");
    //функция возвращает переменную с соединением с базой
	return $db;
}


// ** функция() - формирует запрос "$sql" к соединению с базой "$db"
function execQuery($sql)
{
    // функция создает соединение c базой и сохраняет в переменную "$db"
	$db = createConnection();
    //собственно сам запрос
	$result = mysqli_query($db, $sql);
    // закрывает соединение с базой
	mysqli_close($db);
	// возращает переменную с результатом запроса
	return $result;
}


// ** функция() - получает асоциативный массив с информацией по запросу в переменной "$sql"
function getAssocResult($sql)
{   // функция создает соединение c базой и сохраняет в переменную "$db"
	$db = createConnection();
    // собсивенно запрос "$sql" к базе "$bd"
	$result = mysqli_query($db, $sql);
    // задаём пустой массив
	$array_result = [];
	// циклом выводим в массив в переменную "$row"
    // и из переменной "$row" загружаем данные в массив
	while ($row = mysqli_fetch_assoc($result)) {
		$array_result[] = $row;
	}
    // закрываем соединение
	mysqli_close($db);
	// возвращаем заполненный массив
	return $array_result;
}


// ** функция() - вспомогательная, получает первый элемент из массива.
// что бы убедиться, что массив не пустой
function show($sql)
{
	$result = getAssocResult($sql);
	if(empty($result)) {
		return null;
	}
	return $result[0];
}

