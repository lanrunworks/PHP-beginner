<?php
session_start();

if (isset($_SESSION['name'])) {
    header("Location: send.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="send.php" method="post">
        <p>ようこそ！このページではチャットができます。<br>名前を入力してログインしてください。</p>
        名前：<input type="text" name="userName">
        <input type="submit" value="ログイン">
    </form>
</body>

</html>