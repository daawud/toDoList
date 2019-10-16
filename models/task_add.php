<?php

if (empty($_POST)) {

    die("Произошла внутренняя ошибка, попробуйте добавить запись еще раз.");
}

require_once 'DB.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$task = htmlspecialchars($_POST['task']);
$status = 'Создано';

$prepared_sql = DB::getInstance()->prepare("INSERT INTO tasks (name, email, task, status) VALUES (:name, :email, :task, :status)");

$prepared_sql->bindParam(':name', $name);
$prepared_sql->bindParam(':email', $email);
$prepared_sql->bindParam(':task', $task);
$prepared_sql->bindParam(':status', $status);

if ($prepared_sql->execute()) {
    echo "Новая запись успешно создана";
} else {
    echo "Не удалось создать новую запись";
}

