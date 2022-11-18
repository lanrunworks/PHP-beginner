<!DOCTYPE html>
<html>

<head>
    <title>データベース練習問題3</title>
    <meta charset="UTF-8">
</head>

<body>
    <p>以下に入力した内容がデータベースに登録されます。</p>

    <!--入力用のテキストボックスとボタン-->
    <form id="add" action="dbren3.php" method="get">
        商品コード<input type="text" name="icode" value="" pattern="^S[0-9]{4}$" required/><br>
        商品名　　<input type="text" name="iname" value="" pattern="*{1,50}" required/><br>
        価格　　　<input type="text" name="iprice" value="" pattern="[0-9]{1,}" required/><br>
        取扱店　　<input type="text" name="mcode" value="" pattern="^M[0-9]{4}$" required/><br>

        <input type="submit" value="登録" />
    </form>



    <?php
        //入力があれば処理を実行
        if (!empty($_GET['icode'])) {
            $icode = $_GET['icode'];
            $iname = $_GET['iname'];
            $iprice = $_GET['iprice'];
            $mcode = $_GET['mcode'];

            try{
                //データベースを開く処理（PDOインスタンスを生成　$db）
                $db=new PDO('mysql:host=localhost;dbname=webdb','webDB','webDB');
                print("<p>データベース「webDB」に接続しました</p>");

                //PDOインスタンス($db)を使ってSQL文実行の準備をする。
                //出来上がったものはPDOStatementオブジェクト($sto)として保管
                $sto=$db->prepare('INSERT INTO items(icode , iname , iprice , mcode)
                                            VALUES( :icodeValue , :inameValue , :ipriceValue , :mcodeValue)');

                //PDOStatementオブジェクトを使ってプレイスホルダーに値を入力する
                $sto->bindValue(':icodeValue',$icode);
                $sto->bindValue(':inameValue',$iname);
                $sto->bindValue(':ipriceValue',$iprice);
                $sto->bindValue(':mcodeValue',$mcode);

                //実行処理。正しく処理が終了すれば「テーブル「items」にデータを1件追加しました。」と表示
                if($sto->execute()){
                    print("<p>テーブル「items」にデータを1件追加しました。</p>");
                }else{
                    print("<p>SQL文実行時にエラーが発生しました</p>");
                }

                $db=null;
            }catch(PDOException $e){
                print("<h2>登録処理に失敗しました<br>商品コードを確認してもう一度登録しなおしてください</h2>");
            }
        }

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
                print("<tr></td><td>{$icode}</td><td>{$iname}</td><td>{$iprice}</td><td>{$mcode}</td></tr>");
            }
            $db=NULL;
        }catch(PDOException $e){
            die('処理に失敗しました');
        }
    ?>
</body>

</html>