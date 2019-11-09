<? session_start() ?>

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

    <form action="" name="url_converter">
        <input type="text" name="url">
        <button>Shorten</button>
    </form>

    <button class="btn btn-login" onclick="location='<?= "login.php" ?>'">Войти</button>

    <? if(isset($_SESSION['admin'])): ?>
        <a href="links.php" class="btn btn-links">Все ссылки</a>
        <a href="?logout=true" class="btn btn-logout">Выйти</a>
    <? endif; ?>

    <script src="js/sender.js"></script>
</body>
</html>
