<?php

function getConnection()
    {
        $paramsPath = SITE_ROOT. '/config/db_conf.php';
        $params = include ($paramsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $dbh = new PDO($dsn, $params['user'], $params['password']);
        return $dbh;
    }
    
    $pdo = getConnection();
    
    $sql = 'SELECT `id`, `name`, `email`, `task`, `status` FROM `tasks`';
    
    $tasks = $pdo->query($sql);
    