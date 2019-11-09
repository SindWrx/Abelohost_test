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
    <title>Document</title>
</head>
<body>
    <? if(isset($_SESSION['admin'])): ?>
        <div class="access-denied">
            <h1 class="access-denied__header">Вы уже авторизованы!</h1>
            <a href="?logout=true" class="btn btn-logout">Выйти</a>
        </div>
    <? die(); endif; ?>

    <form action="" name="login_form">
        <input type="text" name="login">
        <input type="password" name="pass">
        <button>Sign in</button>
    </form>

    <a class="btn" href="index.php">На главную</a>

    <script src="js/logger.js"></script>
</body>
</html>
