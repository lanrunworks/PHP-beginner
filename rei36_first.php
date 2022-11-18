<?php
session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = $_GET['userName'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei36_first</title>
</head>

<body>
    <?php
    print("<p>" . $_SESSION['name'] . "さん、ようこそ</p>");
    ?>
    <form action="rei36_second.php">
        <input type="submit" value="次のページ">
    </form>
</body>

</html>