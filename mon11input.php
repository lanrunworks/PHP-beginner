<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon11input</title>
</head>

<body>
    <h2>データの入力（クッキー）</h2>
    <hr>
    <form action="mon11show.php" method="get">
        <p>名前の入力：
            <?php
            //クッキーの受信
            if (isset($_COOKIE["userName"])) {
                $userName = $_COOKIE["userName"];
            } else {
                $userName = "";
            }
            print("<input type='text' name='userName' value='{$userName}' size='10'>");
            ?>
        </p>
        <input type="submit" value="送信">
    </form>
</body>

</html>