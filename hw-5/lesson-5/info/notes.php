<?php

//Пример запроса на SQL по созданию таблицы "employee"
"
CREATE TABLE employee(
id_employee int (11) NOT NULL AUTO_INCREMENT,
first_name varchar(255) NULL DEFAULT '',
middle_name varchar(255) NULL DEFAULT '',
last_name varchar(255) NULL DEFAULT '',
PRIMARY KEY (`id`)
);
";

// Пример запроса SQL в таблицу "employee" о внесении значений
"
INSERT INTO employee (first_name, middle_name, last_name) VALUES ('testuser', 'test', 'test');
";

// Пример запроса в таблицу "employee" на SQL о апдейте имени
"
UPDATE employee SET name='testuser1' WHERE id_employee=1;
DELETE FROM employee WHERE id_employee=5;
";


// ********************************
//Создать соединение c базой данных
$link = mysqli_connect("localhost", "my_user", "my_password", "world");
// "localhost" имя хоста базы к которой подключаемся;
// "my_user" имя логина под которым логинемся к базе;
// "my_password" пароль подключения;
// "world" имя базы к которой подключаемся;

//Закрыть соединение с базой данных
mysqli_close($link);


//ПРимер Запроса в базу данных
$result = mysqli_query($link, "SELECT * FROM employee WHERE id > 0");


// Лечение кодировки
mysqli_query($link, "SET CHARACTER SET 'utf8'");
mysqli_set_charset($link, "utf8");


//GET Получаем данные из таблицы в базе данных
$epms = [];
while ($row = mysqli_fetch_assoc($result)) {
	$epms[] = $row;
}

// Дополнительные функции работы с базой данных:
// mysqli_num_rows – число строк, содержащееся в результате выборки данных;
// mysqli_affected_rows – число строк, затронутых последним запросом INSERT, UPDATE или DELETE;
// mysqli_error – сообщение о последней ошибке, возникшей в ходе запроса;
// mysqli_insert_id – id записи, добавленной последним запросом INSERT;
// mysqli_close
