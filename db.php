<?php
    $usr = 'root';
    $pwd = '';
    $dsn = 'mysql:host=127.0.0.1:3306;dbname=abelohost;';

    try {
        $pdo = new PDO($dsn, $usr, $pwd);
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }

