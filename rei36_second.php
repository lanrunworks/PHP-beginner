<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei36_second</title>
</head>

<body>
    <?php
    print("<p>" . $_SESSION['name'] . "さんが現在も接続中です</p>");
    ?>
    <form action="rei36_logout.php">
        <input type="submit" value="ログアウト">
    </form>
</body>

</html>