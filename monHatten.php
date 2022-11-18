<?php
    //日付を指定し、その月のカレンダーを表示する関数
    //１日以外の指定も可能
    function oneMonthCalendar($cal){
       //引数の月の1日のタイムスタンプを取得
        $calM=date("m",$cal);   //仮引数から月を取得
        $calY=date("Y",$cal);   //仮引数から年を取得
        //            時,分,秒,月,日,年
        $cal1= mktime(0,0,0, $calM, 1, $calY);  //仮引数の月の１日を取得
        
         //1日の曜日
        $day1w=date("w", $cal1);    //月の１日から曜日を取得
        print("<table border='1'>");
        print("<caption>" . date("Y年m月のカレンダー",$cal1) . "</caption>");//月の１日から年月を取得
        print("<tr>");
        print("<th class='sun'>日</th><th>月</th><th>火</th><th>水</th>");
        print("<th>木</th><th>金</th><th class='sat'>土</th>");
        print("</tr>");

        print("<tr>");
        //1日まで空白で埋める
        for($w=0; $w<$day1w; $w++){ //曜日を表す変数$wは1日の曜日の前まで増加
            print("<td width='30'>&nbsp;</td>");
        }

        //月の日数
        $dayMatsu=date("t",$cal1);  //月の１日から月の日数を取得
        //ここからfor文
        for($d=1; $d<=$dayMatsu; $d++){
            if($w==0){  //日曜日は赤に
                print("<td width='30' align='right' class='sun'>{$d}</td>");
            } else if($w==6){   //土曜日は青に
               print("<td width='30' align='right' class='sat'>{$d}</td>");
            } else {    //それ以外の曜日はそのまま
               print("<td width='30' align='right'>{$d}</td>");
            }
            $w++;           //曜日の変数を１足す
            if($w==7){  //土曜日の次は日曜日なので改行して、$wを0に戻す
                print("</tr>");
                print("<tr>");
                $w=0;
            }
        }

        //末日以降をスペースで埋める
        for($wMatsu=$w; $wMatsu<7; $wMatsu++){ 
            print("<td>&nbsp;</td>");
        }
        print("</tr>");
        print("</table>");          
    }   //function oneMonthCalendar終わり
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <style type="text/css">
            .sun {color:red}
            .sat {color:blue}
        </style>
        
        <title>カレンダー</title>
    </head>
    <body>
        <h2>カレンダー</h2>
        <hr>
        <?php
            //最初か、年月と指定したか、を判定する
            if( empty( $_GET['year']) ){
            //if( empty( $_GET['year']) || empty( $_GET['month']) ){
                //初期の場合、年と月は指定されていない
                $selM=date("m");
                $selY=date("Y");
            } else {
                //年と月を指定した場合
                $selM=$_GET['month'];
                $selY=$_GET['year'];
            }
            
            if(empty( $_GET['mCnt']) ){
                $mCnt=1;
            }else{
                $mCnt=$_GET['mCnt'];
            }
            
            //指定した月の1日のタイムスタンプを取得
            //            時,分,秒,月,日,年
            $day1= mktime(0,0,0, $selM, 1, $selY);
 
            //タイムスタンプを利用して『正しい』年と月を取得
            $selM=date("m",$day1);
            $selY=date("Y",$day1);
			
           
            //発展問題
            print("<form name='Calendar'>");
            //print("<form action={$_SERVER['PHP_SELF']} method='get'>");

            //年を選択するリスト
            print("<select name='year' onChange='selectChangeYear();'>\n");
            for($y=2000;$y<=2030;$y++){
                //リストから選択されている年を判定する
                if($y == $selY) {
                    //選択されている年にはselected属性を追加する
                    print("<option value='{$y}' selected>{$y}年</option>\n" );
                } else {
                    print("<option value='{$y}'>{$y}年</option>\n" );
                }
            }
            print("</select>");
            //月を選択するリスト
            print("&nbsp;<select name='month' onchange='selectChangeMonth();'>\n");
            for($m=1;$m<=12;$m++){
                //リストから選択されている月を判定する
                if($m == $selM) {
                    //選択されている月にはselected属性を追加する
                    print("<option value='{$m}' selected>{$m}月</option>\n" );
                } else {
                    print("<option value='{$m}'>{$m}月</option>\n" );
                }
            }
            print("</select>");
            
            //月数の変更
            print("<input type='radio' name='mCnt' value='1' ". ($mCnt==1?'checked':'') ." onchange='radioChange();'>1か月");
            print("<input type='radio' name='mCnt' value='3' ". ($mCnt==3?'checked':'') ." onchange='radioChange();'>3か月");
            print("<input type='radio' name='mCnt' value='12' ". ($mCnt==12?'checked':'') ." onchange='radioChange();'>12か月");
            
            //print("&nbsp;<input type='submit' value='表示'>");
            print("</form>");
            
            print("<hr>");
            
            //指定した月のカレンダーを表示
            print("<table>");
            print("<tr valign='top'>");
            for($m=1;$m<=$mCnt;$m++){
                print("<td>");
                //oneMonthCalendar( $day1 );
                oneMonthCalendar( mktime(0,0,0, $selM+$m-1, 1, $selY) );
                print("</td>");
                if($m%3==0){
                    print("</tr>");
                    print("<tr valign='top'>");
                }
            }
            print("</tr>");
            print("</table>");
        ?>
    </body>
    
    <script>
        //年のリストを変更したときの処理
        //function selectChangeYear(obj)
        function selectChangeYear()
        {
            //var idx = obj.selectedIndex;
            //var val = obj.options[idx].value;
			var val = document.Calendar.year.value;
            <?php
                print("var url='{$_SERVER["PHP_SELF"]}?year='+val+'&month={$selM}&mCnt={$mCnt}';\n");
            ?>
            location.href = url;
        }
        
        //月のリストを変更したときの処理
        //function selectChangeMonth(obj)
        function selectChangeMonth()
        {
            //var idx = obj.selectedIndex;
            //var val = obj.options[idx].value;
			var val = document.Calendar.month.value;
            <?php
                print("var url='{$_SERVER["PHP_SELF"]}?year={$selY}&month='+val+'&mCnt={$mCnt}';\n");
            ?>
            location.href = url;
        }

        //月数のラジオボタンを変更したときの処理
        function radioChange()
        {
            var val = document.Calendar.mCnt.value;
            <?php
                print("var url='{$_SERVER["PHP_SELF"]}?year={$selY}&month={$selM}&mCnt='+val+'';\n");
            ?>
            location.href = url;
        }
    </script>

</html>
