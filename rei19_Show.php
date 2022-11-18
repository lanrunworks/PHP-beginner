<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>rei19_Show</title>
</head>
<body>
    <?php
        //複数行入力の受信はスーパーグローバル変数
        print("<h2>{$_GET['remarks']}</h2>");
    ?>
    <hr>
    <?php
        //nl2br:改行文字列の前に<br>タグを挿入する関数
        $rem = nl2br($_GET['remarks']);
        print("<h2>{$rem}</h2>");
    ?>
    <hr>
    <a href="rei19_Input.html">入力画面に戻る</a>
        
</body>
</html>