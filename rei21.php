<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>rei19_Show</title>
</head>
<body>
    <h2>選択された項目は以下の通りです</h2>
    <hr>
    <table border="1">
        <?php
        //複数項目選択で送信された値を受け取る
        //スーパーグローバル変数には配列の[]は付けない
        $selectSports = $_GET['sports'];

        //implode:配列を区切り記号で区切った1つの文字列に変換する
        echo implode("@", $selectSports) . "<br>";

        //複数項目選択では配列として受け取るので、繰返しの構文で処理する
        foreach ($selectSports as $selected) {
            print("<tr><td>{$selected}</td></tr>");
        }
        ?>
    </table>
    <hr>
    <a href="rei21.html">入力画面に戻る</a>
        
</body>
</html>