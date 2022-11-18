<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データベース接続サンプル</title>
    </head>
    <body>
        <?php
            try{
                //データベースを開く処理（PDOインスタンスを生成　$db）
                $db=new PDO('mysql:host=localhost;dbname=webdb','webDB','webDB');
                print("<p>データベース「webDB」に接続しました</p>");

                //sql文を変数に格納。今回はデータベース内のレコードをすべて参照するsql文
                $sql="SELECT * FROM items";

                //PDOインスタンス($db)を使ってSQL文実行の準備をする。
                //出来上がったものはPDOStatementオブジェクト($sto)として保管
                $sto=$db->prepare($sql);

                //実行処理。戻り値になる参照結果はPDOStatementオブジェクト($sto)にすべてのレコードがくっついた状態で格納される)
                $sto->execute();

                //表形式で表示
                print('<table border="1">');
                print('<tr><th>商品コード</th><th>商品名</th><th>価格</th><th>取扱店</th></tr>');
                
                //fetchメソッドを用いて各レコードに分解。レコードは$rowに格納
                //while文を用いて最後のレコードが格納されるまで処理を繰り返す
                while($row=$sto->fetch()){
                    //レコードを各カラムごとに分け変数に格納(連想配列で取り出す)$row['カラム名']
                    $icode=$row['icode'];
                    $iname=$row['iname'];
                    $iprice=$row['iprice'];
                    $mcode=$row['mcode'];
                    
                    //表示処理
                    print("<tr><td>{$icode}</td><td>{$iname}</td><td>{$iprice}</td><td>{$mcode}</td></tr>");
                }
                $db=NULL;
            }catch(PDOException $e){
                die('処理に失敗しました');
            }

        ?>
    </body>
</html>