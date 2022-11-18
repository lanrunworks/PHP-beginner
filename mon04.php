<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <title>mon04</title>
</head>

<body>
    <h2>今月のカレンダー</h2>
    <hr>
    <?php

    function oneMonthCalender($cal)
    {


        //今月の1日のタイムスタンプを取得
        $thisM = date("m",$cal);
        $thisY = date("Y",$cal);
        //             時、分、秒、月、日、年
        $day1 = mktime(0,0,0,$thisM,1,$thisY);

        print(date("Y年m月のカレンダー",$day1));


        print("<table border='1'>");
        print("<tr>");
        print("<th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th>");
        print("</tr>");
        print("<tr>");
        //1日まで空白で埋める
        $day1w = date("w",$day1);
        for($w = 0; $w < $day1w; $w++){
            print("<td width='30'></td>");
        }
        
        //月の日数
        $dayMatsu = date("t",$day1);
        for($d = 1; $d <= $dayMatsu; $d++){
            print("<td width='30'>{$d}</td>");
            $w++;
            //土曜日になったら改行
            if($w == 7){
                print("</tr>");
                print("<tr>");
                $w = 0;
            }

        }
        print("</tr>");
        print("</table>");
        print("<hr>");
    }

    oneMonthCalender(mktime(0,0,0,5,1,2022));
    oneMonthCalender(mktime(0,0,0,6,1,2022));
    oneMonthCalender(mktime(0,0,0,7,1,2022));



    ?>
</body>

</html>