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
                $db=null;
                print("<p>データベースを切断しました</p>");
            }catch(PDOException $e){
                die("<h2>データベース接続に失敗しました</h2>");
            }
            print("<h3>実習は正常に終了しました</h3>");
        ?>
    </body>
</html>
