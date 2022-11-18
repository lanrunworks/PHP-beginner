<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon02</title>
    <style type="text/css">

    </style>
</head>

<body>
    <h2>九九の表</h2>
    <hr>
    <?php
    print("<table border='1'>");

    //かけられる数の表示
    print("<tr>");
    print("<th width='60' colspan='2' rowspan='2'>&nbsp;</th>");
    print("<th colspan='9'>かけられる数</th>");
    print("</tr>\n");

    //かけられる数の数字の表示
    print("<tr>");
    for ($yoko = 1; $yoko <= 9; $yoko++) {
        print("<th width='30'>{$yoko}</th>");
    }
    print("</tr>\n");

    //掛けた値
    //行方向の繰り返し
    for ($tate = 1; $tate <= 9; $tate++) {
        print("<tr>");

        if ($tate == 1) {
            print("<th rowspan='9' width='30'>かける数</th>");
        }
        //掛ける数の数字の表示
        print("<th width='30'>{$tate}</th>");
        //列方向の繰り返し
        for ($yoko = 1; $yoko <= 9; $yoko++) {
            //計算
            $kuku = $tate * $yoko;
            //出力
            print("<td align='center'>{$kuku}</td>");
        }
        print("</tr>\n");
    }
    print("</table>\n");


    ?>
</body>

</html>