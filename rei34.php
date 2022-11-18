<?php
    //クッキーの受信
    //スーパーグローバル変数$_COOKIE、キーはクッキーの名前
    //クッキーの有無を調べて、初めての接続か、2回目以降かを判定
    if (isset($_COOKIE['lastVisitTime'])) {
        //2回目以降の場合
        //クッキーの値を取得
        $lastTime = $_COOKIE['lastVisitTime'];
    } else {
        //初めて接続する場合
        $lastTime = "今回が初めての訪問です。";
    }


    //クッキーに送信する値を変数に代入
    $thisTime = date("Y年m月d日 g時i分s秒");

    //クッキーをサーバーからクライアントへ送信
    //名前:lastVisitTime
    //値：$thisTime（変数）
    //有効期間：現在の起算日からの秒数＋14日後
    setcookie('lastVisitTime', $thisTime, time() + 60 * 60 * 24 * 14);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei34</title>
</head>

<body>
    <h1>ようこそ</h1>
    <?php
    print("<p>前回の訪問日時：{$lastTime}</p>");
    ?>
</body>

</html>