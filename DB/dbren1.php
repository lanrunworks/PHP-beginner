<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データベース練習問題1</title>
    </head>
    <body>
        <?php
            try{
                //データベースを開く処理（PDOインスタンスを生成 $db）
                $db=new PDO('mysql:host=localhost;dbname=webdb','webDB','webDB');
                print("<p>データベース「webDB」に接続しました</p>");

                //PDOインスタンス($db)を使ってSQL文実行の準備をする。
                //出来上がったものはPDOStatementオブジェクト($sto)として保管
                $sto=$db->prepare('UPDATE sales SET samount=:samountValue WHERE sno=3');

                //PDOStatementオブジェクトを使ってプレイスホルダーに値を入力する
                $sto->bindValue(':samountValue',255);

                //実行処理。正しく処理が終了すれば「テーブル「sales」のデータを更新しました。」と表示
                if($sto->execute()){
                    print("<p>テーブル「sales」のデータを更新しました。</p>");
                }else{
                    print("<p>SQL文実行時にエラーが発生しました</p>");
                }

                //データベースを閉じる
                $db=null;
            }catch(PDOException $e){
                die("<h2>処理に失敗しました</h2>");
            }
        ?>
    </body>
</html>