<?php
    session_start();
    if($_GET['logout'] && $_GET['logout'] === 'true') unset($_SESSION['admin']);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <section class="page">
        <div class="page-box page-box_lowPB">

            <? if(isset($_SESSION['admin'])): ?>
                <div class="access-denied">
                    <h1 class="access-denied__header">Вы уже авторизованы!</h1>
                    <a href="?logout=true" class="btn btn-logout">Выйти</a>
                </div>
            <? die(); endif; ?>

            <form action="" name="login_form">
                <h3 class="formHeader">Авторизация</h3>
                <input class="textField" type="text" name="login" placeholder="admin" required>
                <input class="textField" type="password" name="pass" placeholder="123" required>
                <button class="btn btn-submit">Войти</button>
            </form>

            <div class="errorBlock">Неверный логин или пароль</div>

            <a class="btn btn-main" href="index.php">На главную</a>
        </div>
    </section>

    <link rel="stylesheet" href="css/main.css">
    <script src="js/logger.js"></script>
</body>
</html>
