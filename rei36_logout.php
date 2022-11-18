<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei36_logout</title>
</head>

<body>
    <?php
    print("<p>" . $_SESSION['name'] . "さん、ご利用ありがとうございました</p>");

    //セッション用のファイルの削除
    session_destroy();
    ?>
</body>

</html>