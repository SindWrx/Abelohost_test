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
</head>
<body>

    <? if(!isset($_SESSION['admin'])){ ?>
        <div class="access-denied">
            <h1 class="access-denied__header">Только администраторы имеют право доступа к этой странице!</h1>
            <a class="access-denied__link" href=<?= 'login.php' ?>>Log In</a>
        </div>
    <? die(); } else { ?>
        <a href="?logout=true" class="btn btn-logout">Выйти</a>
    <? } ?>


    <?
        $query = $pdo->prepare('SELECT `url`, `short_key` FROM links');
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($row as $link){
            $readyLink = $_SERVER['HTTP_HOST'] . '/-' . $link['short_key'];
            echo '<p><a href="-' . $link['short_key'] . '">' . $readyLink . '</a></p>';
        }
    ?>

</body>
</html>