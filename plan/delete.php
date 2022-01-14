<?php

require 'configBD.php';

$id = $_GET['id'];

$sql = 'DELETE FROM `tasks` WHERE `id` = ?';

$query = $pdo->prepare($sql);
$query->execute([$id]);

header('location: /plan/index.php');