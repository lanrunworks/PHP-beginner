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
                        
            //指定した月の1日のタイムスタンプを取得
            //            時,分,秒,月,日,年
            $day1= mktime(0,0,0, $selM, 1, $selY);
 
            //タイムスタンプを利用して『正しい』年と月を取得
            $selM=date("m",$day1);
            $selY=date("Y",$day1);
           
            
            //問題６ 1行入力に年と月を入力して表示
            //自身のファイルを呼ぶ
            //print("<form action='mon06.php' method='get'>");
            //実行しているファイル名を取得する $_SERVER['PHP_SELF']
            print("<form action={$_SERVER['PHP_SELF']} method='get'>");
            print("入力：<input type='text' name='year' value='{$selY}' size='3'>年");
            print("<input type='text' name='month' value='{$selM}' size='3'>月");
            print("&nbsp;<input type='submit' value='表示'>");
            print("</form>");
			print("<br>");
            
			//問題7 リストで年と月を選択して表示
            print("<form action={$_SERVER['PHP_SELF']} method='get'>");
            //年を選択するリスト
            print("選択：<select name='year'>\n");
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
            print("&nbsp;<select name='month'>\n");
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
            print("&nbsp;<input type='submit' value='表示'>");
            print("</form>");
            print("<br>\n");
            
            //問題８ 次月、前月への移動ボタン
            print("<table><tr><td>");
            //前月ボタン
            print("<form action='{$_SERVER["PHP_SELF"]}' method='get'>");
            print("<input type='hidden' name='year' value='{$selY}'>");
            print("<input type='hidden' name='month' value='" . ($selM-1) . "'>");
            print("<input type='submit' value='前月'>");
            print("</form>");
                        
            print("</td><td>");
            //次月ボタン
            print("<form action='{$_SERVER["PHP_SELF"]}' method='get'>");
            print("<input type='hidden' name='year' value='{$selY}'>");
            print("<input type='hidden' name='month' value='" . ($selM+1) . "'>");
            print("<input type='submit' value='次月'>");
            print("</form>");
            print("</td></tr></table>");
            print("<hr>");

            //問題９ 次月、前月へのリンク
            print("<a href='{$_SERVER["PHP_SELF"]}?year={$selY}&month=" . ($selM-1) ."'>前月</a>");
            print("&nbsp;");
            print("<a href='{$_SERVER["PHP_SELF"]}?year={$selY}&month=" . ($selM+1) ."'>次月</a>");
            print("<hr>");
            
            //指定した月のカレンダーを表示
            oneMonthCalendar( $day1 );
            
        ?>
    </body>

</html>