<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ショッピングサイト（簡易版）</title>
</head>

<body>
    <h2>ショッピングサイト（会計）</h2>
    <?php
    if (empty($_SESSION['items'])) {
        print("カートの中は空です");
    } else {
        print("<table border='1'>");
        print("<tr><th>商品名</th><th>価格</th></tr>");

        $items = $_SESSION['items'];
        $sum = 0;
        foreach ($items as $item) {
            //文字列をカンマで区切って配列に変換し、２つの変数へ代入する
            list($name, $price) = explode(",", $item);
            print("<tr><td>{$name}</td><td align='right'>{$price}円</td></tr>");
            $sum += $price;
        }
        print("<tr><td align='center'>合計</td><td align='right'>{$sum}円</td></tr>");
        print("</table>");
    }
    ?>
    <br>
    <table>
        <!-- formタグを並べると改行されるので、横に並べるにはtableタグ-->
        <tr>
            <td>
                <form action="myShopTop.html" method="get">
                    <input type="submit" value="商品選択に戻る">
                </form>
            </td>
            <td>
                <form action="myShopList.php" method="get">
                    <input type="submit" value="カートに戻る">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>