<?php

require_once 'DB.php';

$pdo = DB::getInstance();

if (isset($_GET['page'])){
	$page = $_GET['page'];
}else $page = 1;

$kol = 3;  //количество записей для вывода
$art = ($page * $kol) - $kol; // определяем, с какой записи нам выводить

$sql = "SELECT id, name, email, task, status FROM tasks LIMIT $art,$kol";
$tasks = $pdo->query($sql);

$sql = 'SELECT COUNT(*) FROM tasks';
$row = $pdo->query($sql)->fetch(PDO::FETCH_NUM);
$total = $row[0]; // всего записей 

$str_pag = ceil($total / $kol);