<?php

require_once 'DB.php';

$pdo = DB::getInstance();
$sql = 'SELECT id, name, email, task, status FROM tasks';
$tasks = $pdo->query($sql);
