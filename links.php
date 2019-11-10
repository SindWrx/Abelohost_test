<?
    session_start();
    if($_GET['logout'] && $_GET['logout'] === 'true') {
        unset($_SESSION['admin']);
        header("Location: links.php");
    }
    require_once('php/db.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ссылки</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="page">
        <div class="page-box page-box_linkPage">

        <? if(!isset($_SESSION['admin'])){ ?>
            <div class="access-denied">
                <h3 class="formHeader">Только администраторы имеют право доступа к этой странице!</h3>
                <a class="btn btn-loginForm" href="login.php">Авторизоваться</a>
                <a class="btn btn-login" href="login.php">Войти</a>
            </div>
        <? die(); } else { ?>
            <a href="?logout=true" class="btn btn-logout">Выйти</a>
        <? } ?>

        <a href="index.php" class="btn btn-main">На главную</a>

        <?
            $query = $pdo->prepare('SELECT `url`, `short_key` FROM links');
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            if($row) echo '<div class="linkContainer">';
            foreach ($row as $link){
                $readyLink = $_SERVER['HTTP_HOST'] . '/-' . $link['short_key'];
                echo '<a class="btn" href="-' . $link['short_key'] . '">' . $readyLink . '</a>';
            }
            if($row) echo '</div>';
        ?>

        </div>
    </section>
</body>
</html>