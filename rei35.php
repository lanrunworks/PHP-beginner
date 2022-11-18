<?php
//セッションの開始、セッションを利用する場合には先頭で実行する
session_start();

//セッション変数の取得
if (isset($_SESSION['lastVisitTime'])) {
    //2回目以降の場合にはセッション変数の値を取得
    $lastTime = $_SESSION['lastVisitTime'];
} else {
    //初めての場合には、メッセージを代入
    $lastTime = "今回が初めての訪問です";
    $thisTime = date("Y年m月j日 g時i分s秒");

    //セッション変数への代入
    $_SESSION['lastVisitTime'] = $thisTime;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei35</title>
</head>

<body>

    <h1>ようこそ</h1>
    <?php
    print("<p>前回の訪問日時：{$lastTime}</p>\n");
    ?>
</body>

</html>