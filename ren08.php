<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ren08</title>
</head>

<body>
    <?php
        $maddr = $_GET['maddr'];

        if(empty($maddr)){
            print("<h1>データが未入力です</h1>");
        }else{
            $pos = strpos($maddr,"@");//print($pos."<br>");
            $user = substr($maddr,0,$pos);
            $domain = substr($maddr,$pos+1);

            if($pos === false){
                print("<h1>@が含まれていない不正なデータです</h1>");
            }else if(strpos($domain,"@") === false){
                print($user."<br>");
                print($domain."<br>");
            }else{
                print("<h1>@が2つ以上含まれる不正なデータです</h1>");
            }
        }
    
    ?>
    <br>
    <a href="ren08.html">前のページに戻る</a>
</body>

</html>