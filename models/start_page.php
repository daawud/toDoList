<?php

require_once 'DB.php';

$pdo = DB::getInstance();

if (isset($_GET['page'])){
	$page = $_GET['page'];
}else $page = 1;

if (isset($_POST['sort_value'])){
	$_SESSION['sort_field'] = $_POST['sort_value'];
}        

$_SESSION['sort_field'] = isset($_SESSION['sort_field'])?$_SESSION['sort_field']:'id';

$rec = 3;  //количество записей для вывода
$art = ($page * $rec) - $rec; // определяем, с какой записи нам выводить

$sort_field = $_SESSION['sort_field'];
$sql = "SELECT id, name, email, task, status FROM tasks ORDER BY $sort_field";
$tasks = $pdo->query($sql)->fetchAll();

$str_pag = ceil(count($tasks) / $rec);