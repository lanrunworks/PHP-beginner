<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon03</title>
</head>

<body>
    <h2>西暦と和暦の対応表</h2>
    <hr>
    <?php
    print("<table border='1'>");
    print("<tr>");
    print("<th>西暦</td><th>和暦</td>");
    print("<th>満年齢</th>");        //追加
    print("</tr>");

    $thisYear = date("Y");              //追加
    for ($y = 1868; $y <= $thisYear; $y++) {  //変更
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
        } else if ($y == 2019) {
            print("<td>平成31年、令和元年</td>");
        } else {
            print("<td>令和" . ($y - 2018) . "年</td>");
        }

        print("<td>" . ($thisYear - $y) . "才</td>"); //追加

        print("</tr>\n");
    }
    print("</table>");
    ?>
</body>

</html>