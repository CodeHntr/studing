<?php

require_once'./parse.php';

$file = "extensions.txt"; // Створюєм файл
$string = file_get_contents('http://php.net/extensions.alphabetical.php'); // перемінна для визначення об'єкта для парсу.
$data = Parse($string, '<ul id="quickref_functions">', '</ul>');
file_put_contents($file, $data);




$file = "constants.txt";
$string = file_get_contents('https://www.php.net/manual/ru/reserved.constants.php'); 
$data = Parse($string, '<dt id="constant.php-version">', ' </dl>' );
file_put_contents($file, $data);
