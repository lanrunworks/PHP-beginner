<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon11show</title>
</head>

<body>
    <?php
        print("<h2>ようこそ{$_GET['userName']}さん</h2>");

        //クッキーの送信
        setcookie("userName", $_GET['userName'], time() + 60 * 60 * 24 * 14);
    ?>
    <a href="mon11input.php">入力画面に戻る</a>
</body>

</html>