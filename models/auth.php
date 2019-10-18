<?php

if (empty($_POST)) {

    die("Произошла внутренняя ошибка, попробуйте войти еще раз.");
}

require_once 'DB.php';

$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));

$prepared_sql = DB::getInstance()->prepare("SELECT * FROM users WHERE login = :login AND pass = :password ");

$prepared_sql->bindParam(':login', $login);
$prepared_sql->bindParam(':password', $password);

$prepared_sql->execute();
$qresult = $prepared_sql->fetch(PDO::FETCH_NUM);

if ($qresult) {
    if ($qresult[3] == 'adm') {
        $_SESSION['admin_session'] = true;
        unset($_POST);
        require (WWW_ROOT . 'index.php');
    } else {
        echo "Отказано в доступе!";
        exit();    
    }
} else {
    echo "Отказано в доступе!";
    exit();
}

