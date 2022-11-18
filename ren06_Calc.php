<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ren06_Calc</title>
</head>

<body>
    <?php

    if (empty($_GET['num1']) || empty($_GET['num2'])){
        echo "数字が入力されていません";
    }else if (!is_numeric($_GET['num1'])){
        echo "数字1に数値が入力されていません";
    }else if (!is_numeric($_GET['num2'])){
        echo "数字2に数値が入力されていません";
    }else{
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        //echo "{$num1} + {$num2} = {$num1+$num2}"; //これはエラー
        // echo "{$num1} + {$num2} = {$num1}+{$num2}<br>";//これは計算されない
        // echo "{$num1} + {$num2} = " . $num1 + $num2."<br>" ;//昔はエラー
        echo "{$num1} + {$num2} = " . ($num1 + $num2) . "<br>";

        $sa   = $num1 - $num2;
        $seki = $num1 * $num2;
        $syo  = $num1 / $num2;

        echo "{$num1} - {$num2} = {$sa}<br>";
        echo "{$num1} * {$num2} = {$seki}<br>";
        echo "{$num1} / {$num2} = {$syo}<br>";

    }
    
    

    ?>
    <br>
    <a href="ren06_Input.html">入力画面に戻る</a>
</body>

</html>