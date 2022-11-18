<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>カレンダー</title>
    </head>
    <body>
        <h2>カレンダー</h2>
        <hr>
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
                print(date("Y年m月のカレンダー",$cal1));//月の１日から年月を取得
                print("<tr>");
                print("<th>日</th><th>月</th><th>火</th><th>水</th>");
                print("<th>木</th><th>金</th><th>土</th>");
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
                    print("<td width='30' align='right'>{$d}</td>");
                    $w++;       //曜日の変数を１足す
                    if($w==7){  //土曜日の次は日曜日なので改行して、$wを0に戻す
                        print("</tr>");
                        print("<tr>");
                        $w=0;
                    }
                }
                print("</tr>");
                print("</table>");          
            }      
            
            
            //スーパーグローバル変数から入力された値を取ってくるブロック
            //他の課題に使いまわし可能
            //初期値代入の処理
            if(empty($_GET['month']) || empty($_GET['year'])){
                $selM=date('m');
                $selY=date('Y');
            }else{
                $selM=$_GET['month'];
                $selY=$_GET['year'];
            }
            
            //問題６ 1行入力に年と月を入力して表示
            //自身のファイルを呼ぶ
            //print("<form action='mon06.php' method='get'>");
            //実行しているファイル名を取得する $_SERVER['PHP_SELF']
            print("<form action={$_SERVER['PHP_SELF']} method='get'>");
            print("入力欄：<input type='text' name='year' value={$selY} size=3>年");
            print("<input type='text' name='month' value={$selM} size=3>月");
            print("<input type='submit' value='表示'>");
            print("</form>");

            print("<hr>");


            
            $day1 = mktime(0,0,0,$selM,1,$selY);
            
            //指定した月のカレンダーを表示
            oneMonthCalendar($day1);
            
        ?>
        
    </body>

</html>




