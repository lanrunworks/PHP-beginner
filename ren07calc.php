<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ren07calc</title>
</head>

<body>
    <?php
        //選択された年を受け取る
        $byear = $_GET['byear'];
        //年齢を計算
        $age = date('Y') - $byear;
        //年齢を出力
        print "<h1>あなたは今年で{$age}歳になります</h1>";
    ?>
    <a href="ren07.php">前のページに戻る</a>
</body>

</html>