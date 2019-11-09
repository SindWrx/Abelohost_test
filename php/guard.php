<?php
    session_start();
    require_once('./db.php');

    $rawData = file_get_contents('php://input');
    $data = json_decode($rawData);

    $query = $pdo->prepare('SElECT `nick` FROM `users` WHERE nick = :login');
    $query->execute([':login' => $data->login]);
    $login = $query->fetch(PDO::FETCH_OBJ);

    $query = $pdo->prepare('SElECT `pwd` FROM `users` WHERE pwd = :pass');
    $query->execute([':pass' => $data->pass]);
    $pass = $query->fetch(PDO::FETCH_OBJ);

    if($login && $pass) {
        $_SESSION['admin'] = true;
        echo 'Успешно';
        die();
    }

    echo 'Неверно';
?>
