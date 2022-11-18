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
    <h2>ショッピングサイト（カート一覧）</h2>
    <?php
    if (empty($_SESSION['items'])) {
        print("カートの中は空です");
    } else {
        $items = $_SESSION['items'];
        foreach ($items as $item) {
            print("{$item}<br>");
        }
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
                <form action="myShopCheck.php" method="get">
                    <input type="submit" value="会計に進む">
                </form>
            </td>
            <td>
                <form action="myShopCancel.php" method="get">
                    <input type="submit" value="カートを空にする">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>