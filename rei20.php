<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>rei20</title>
</head>
<body>
    <?php
        switch ($_GET['sedai']){
            case 1:
                $s = "20歳未満";
                break;
            case 2:
                $s = "20歳～29歳";
                break;
            case 3:
                $s = "30歳～39歳";
                break;
            case 4:
                $s = "40歳～49歳";
                break;
            case 5:
                $s = "50歳以上";
                break;
            
        }
        print("<h2>選択された世代は{$s}でした</h2>")
    ?>
    <hr>
    <a href="rei20.html">入力画面に戻る</a>
        
</body>
</html>