<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Список справ</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Список справ</h1>
		<form action="/plan/add.php" method="post">
			<input type="text" name="task" id="task" placeholder="Потрібно зробити.." class="form-control">
			<button type="submit" name="sendTask" class="btn btn-success">Відправити</button>

		</form>

		<?php
		require'configBD.php';
        echo '<ul>';
        echo 'Привіт, Світ!';
		$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
		while($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo'<li><b>'.$row->task.'</b><a href="/plan/delete.php?id='.$row->id.'"><button>Видалити</button></a></li>'; //Звертаємось до об'єкта роув та поля таск. Перебираємо всі дані і виводим 																		таск. 	
		}
        echo '</ul>';
		?>


	</div>	
</body>
</html>