<?php
    require_once('./db.php');

    $key = htmlspecialchars($_GET['key']);
    if(empty($_GET['key'])) {}
    else {
        $query = $pdo->prepare('SELECT * FROM `links` WHERE `short_key` = :key');
        $query->execute([':key' => $key]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row){
            $result = [
                'url' => $row['url'],
                'key' => $row['short_key'],
            ];
        }

        header('Location: ' . $result['url']);
    }
?>
