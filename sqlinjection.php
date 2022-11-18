<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>インジェクション</title>
</head>
<body>
    <h1>データベース検索</h1>
    <hr>
    <form action="sqlinjection.php" method="post">
        <p>icodeで検索：<input type="text" name="sql" size="100"></p>
        <input type="submit" value="送信">
    </form>

    <?php
            try{

                if(!empty($_POST['sql'])){
                    $db=new PDO('mysql:host=localhost;dbname=webdb','webDB','webDB');
                    print("<p>データベース「webDB」に接続しました</p>");


/*
                    //入力フォームに入力されたicode
                    $icode = $_POST['sql'];

                    //入力されたicodeをもとにレコードを抽出
                    $sql="SELECT * FROM items WHERE icode = '{$icode}'";

                    //prepare
                    $sto=$db->prepare($sql);

                    //実行
                    $sto->execute();
*/                    

                    //入力フォームに入力されたicode
                    $icode = $_POST['sql'];

                    //入力されたicodeをもとにレコードを抽出
                    $sql="SELECT * FROM items WHERE icode = :icodeValue";

                    //prepare
                    $sto=$db->prepare($sql);

                    //プレイスホルダーに値をセット
                    $sto->bindValue(':icodeValue',$icode);

                    //実行
                    $sto->execute();





                    //表形式で表示
                    print('<table border="1">');
                    print('<tr><th>商品コード</th><th>商品名</th><th>価格</th><th>取扱店</th></tr>');

                    while($row=$sto->fetch()){
                        $icode=$row['icode'];
                        $iname=$row['iname'];
                        $iprice=$row['iprice'];
                        $mcode=$row['mcode'];

                        print("<tr><td>{$icode}</td><td>{$iname}</td><td>{$iprice}</td><td>{$mcode}</td></tr>");
                    }
                    $db=NULL;
                }
            }catch(PDOException $e){
                die('処理に失敗しました');
            }
            

        ?>
</body>
</html>