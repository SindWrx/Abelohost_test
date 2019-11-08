<?php
require_once('./db.php');

$link = file_get_contents('php://input');

if(empty($link)) {}
else{
    $query = $pdo->prepare('SELECT * FROM `links` WHERE `url` = :link');
    $query->execute([':link' => $link]);
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if(!$row){
        $letters='QWERTYUIOPASDFGHJKLZXCVBNM1234567890';
        $count=strlen($letters);
        $intval=time();
        $result='';

        for($i=0;$i<4;$i++) {
            $last=$intval%$count;
            $intval=($intval-$last)/$count;
            $result.=$letters[$last];
        }

        $query = $pdo->prepare('INSERT INTO `links`(`url`, `short_key`) VALUES(:url, :short_key)');
        $query->execute([':url' => $link, ':short_key' => $result.$intval]);

        $query = $pdo->prepare('SELECT * FROM `links` WHERE `url` = :link');
        $query->execute([':link' => $link]);
        $row = $query->fetch(PDO::FETCH_ASSOC);
    }

    $result = [
        'url' => $row['url'],
        'key' => $row['short_key'],
        'link' => 'http://'.$_SERVER['HTTP_HOST'].'/'.$row['short_key']
    ];

    echo json_encode($result);
}
?>
