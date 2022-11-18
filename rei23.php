<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>rei23</title>
</head>

<body>
    <?php
    $pcode = $_GET['pcode'];
    //郵便番号が入力されているかどうかの判定
    if (empty($pcode)) {
        print("<h2>データが未入力です</h2>");
    } else {
        $check = preg_match('/^[0-9]{3}-[0-9]{4}$/', $pcode);
        if ($check == 0) {  //郵便番号の形式に適わない
            print("<h2>郵便番号の形式で入力してください</h2>");
        } else {  //郵便番号の形式に適っている
            print("<h2>あなたが入力した郵便番号は「{$pcode}」です</h2>");
        }
    }
    ?>
    <br>
    <a href="rei23.html">前のページに戻る</a>
</body>

</html>