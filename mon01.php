<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon01</title>
</head>

<body>
    <h2>西暦と和暦の対応表</h2>
    <hr>
    <?php

    print(mktime(10,0,0,5,9,2022));
    print("<br>");
    print(time());



    print("<table border='1'>");
    print("<tr>");
    print("<td align='center'>西暦</td><td align='center'>和暦</td><td align='center'>満年齢</td>");
    print("</tr>");

    $nowyear = date("Y");

    for ($y = 1868; $y <= $nowyear; $y++) {
        print("<tr>");
        print("<td>{$y}年</td>");

        if ($y == 1868) {
            print("<td>明治元年</td>");
        } else if ($y < 1912) {
            print("<td>明治" . ($y - 1867) . "年</td>");
        } else if ($y == 1912) {
            print("<td>明治45年、大正元年</td>");
        } else if ($y < 1926) {
            print("<td>大正" . ($y - 1911) . "年</td>");
        } else if ($y == 1926) {
            print("<td>大正15年、昭和元年</td>");
        } else if ($y < 1989) {
            print("<td>昭和" . ($y - 1925) . "年</td>");
        } else if ($y == 1989) {
            print("<td>昭和64年、平成元年</td>");
        } else if ($y < 2019) {
            print("<td>平成" . ($y - 1988) . "年</td>");
        }else if ($y == 2019) {
            print("<td>平成31年、令和元年</td>");
        }else {
            print("<td>平成" . ($y - 2018) . "年</td>");
        }
        //3列目の情報として満年齢を追加
        $nenrei = $nowyear - $y;
        print("<td>{$nenrei}歳</td>");

        print("</tr>\n");
    }

    print("</table>");


/*
    for ($y = 1868; $y <= 2022; $y++) {
        print("{$y}年　");

        if ($y == 1868) {
            print("明治元年"."<br>");
        } else if ($y < 1912) {
            print("明治" . ($y - 1867) . "年"."<br>");
        } else if ($y == 1912) {
            print("明治45年、大正元年"."<br>");

        } else if ($y < 1926) {
            print("大正" . ($y - 1911) . "年"."<br>");
        } else if ($y == 1926) {
            print("大正15年、昭和元年"."<br>");

        } else if ($y < 1989) {
            print("昭和" . ($y - 1925) . "年"."<br>");
        } else if ($y == 1989) {
            print("昭和64年、平成元年"."<br>");

        } else if ($y < 2019) {
            print("平成" . ($y - 1988) . "年"."<br>");
        } else if ($y == 2019) {
            print("平成31年、令和元年"."<br>");

        } else {
            print("令和" . ($y - 2018) . "年"."<br>");
        }
    }
    */

    ?>
</body>

</html>