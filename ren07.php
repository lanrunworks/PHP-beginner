<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ren07</title>
</head>

<body>
    <h1>あなたの年齢を計算します</h1>
    <hr>
    <h2>あなたの生まれた年（西暦）を選択してください</h2>

    <!-- <form action="ren07.php" method="get">  -->
    <!-- <form action="{$_SERVER['PHP_SELF']}" method="get">  -->
    
        <form action='ren07calc.php' method='get'>
        
        生まれた年（西暦）：
        <select name='byear'>
        <?php
            //1930年から今年までのリスト
            for ($y = 1930; $y <= date("Y"); $y++) {
                print "<option value='{$y}'>{$y}年</option>";
            }
        ?>

        </select>
        <input type="submit" value="年齢計算">
        <br>
    </form>

</body>

</html>