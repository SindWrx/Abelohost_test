<?
    session_start();
    if($_GET['logout'] && $_GET['logout'] === 'true') {
        unset($_SESSION['admin']);
        header("Location: index.php");
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>

<section class="page">
    <div class="page-box" name="indexPageBox">

        <form class="urlConverter">
            <h3 class="formHeader">Вставьте URL</h3>
            <input class="textField" type="text" name="url" placeholder="http://domain/любой/путь">
            <button class="btn btn-submit">Сократить</button>
        </form>

        <? if (!isset($_SESSION['admin'])): ?>
            <a class="btn btn-login" href="login.php">Войти</a>
        <? endif; ?>

        <? if (isset($_SESSION['admin'])): ?>
            <a href="links.php" class="btn btn-links">Все ссылки</a>
            <a href="?logout=true" class="btn btn-logout">Выйти</a>
        <? endif; ?>

    </div>
</section>

<link rel="stylesheet" href="css/main.css">
<script src="js/sender.js"></script>

</body>
</html>
