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
    <h2>ショッピングサイト（キャンセル）</h2>
    <?php
    if (empty($_SESSION['items'])) {
        print("カートの中は空です");
    } else {
        session_unset();
        print("カートの中を削除しました");
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