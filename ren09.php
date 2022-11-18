<!DOCTYPE html>
<html>

<head>
    <title>ren09</title>
    <meta charset="UTF-8">
</head>

<body>
    <p>以下に入力した文字列がテキストファイルに書き込まれます。</p>
    <form id="add" action="ren09.php" method="post">
        <input type="text" name="data" value="" />
        <input type="submit" value="書き込み" />
    </form>

    <?php
    if (!empty($_POST['data'])) {
        $contents = $_POST['data'] . PHP_EOL;
        file_put_contents('ren09.txt', $contents, FILE_APPEND | LOCK_EX);
    }
    ?>
</body>

</html>