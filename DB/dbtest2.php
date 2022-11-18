<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データベース接続サンプル</title>
    </head>
    <body>
        <?php
            try{
                $db=new PDO('mysql:host=localhost;dbname=webdb','webDB','webDB');
                print("<p>データベース「webDB」に接続しました</p>");

                //1 準備
                $sto = $db->prepare('INSERT INTO items(icode , iname , iprice , mcode)
                                VALUES( :icodeValue , :inameValue , :ipriceValue , :mcodeValue)');


                //2 値をセット（プレースホルダー）
                $sto->bindValue(':icodeValue','S0004');
                $sto->bindValue(':inameValue','内臓HDD2TB');
                $sto->bindValue(':ipriceValue',11500);
                $sto->bindValue(':mcodeValue','M0002');



                //3 実行（送信）
                if($sto->execute()){
                    print("<p>テーブル「items」にデータを1件追加しました。</p>");
                }else{
                    print("<p>SQL文実行時にエラーが発生しました</p>");
                }

                $db=null;
            }catch(PDOException $e){
                print('Error:'.$e->getMessage());
                print("<br>");
                die("<h2>処理に失敗しました</h2>");
            }
        ?>
    </body>
</html>