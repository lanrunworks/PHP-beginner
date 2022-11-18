<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei33</title>
</head>

<body>
    <?php
    //サニタイズ、htmlspecialchars関数で、入力されたデータを、コードが実行されないように無害化
    print("<h2>ようこそ" . htmlspecialchars($_GET['userName'], ENT_QUOTES) . "さん</h2>");
    //print("<h2>ようこそ" . $_GET['userName'] . "さん</h2>");
    ?>
    <a href="rei33.html">入力画面に戻る</a>
</body>

</html>