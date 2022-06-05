<?php

$task = $_POST['task'];

if($task == '') {
	echo 'Введите саме завдання';
	exit();	
}

require'configBD.php';

$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task, ]);

header('Location: /plan/index.php');