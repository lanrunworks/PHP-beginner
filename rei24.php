<!DOCTYPE html>
<html>

<head>
    <title>rei24</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $contents = "この文字列がファイルに書き込まれます。" . PHP_EOL;
    file_put_contents('rei24_new.txt', $contents, FILE_APPEND | LOCK_EX);
    echo $contents;
    ?>
</body>

</html>