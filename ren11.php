<!DOCTYPE html>
<html>

<head>
    <title>ren11</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>コメントを入力して送信ボタンを押してください</p>
    <p>コメント未入力で送信ボタンを押すとページを更新します</p>
    <form action="ren11.php" method="post">
        コメント：<input type="text" name="data" value="" size="30">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?php
        if(!empty($_POST['data'])){
            $data = $_POST['data'];
            $data = $_POST['data'].PHP_EOL;
            file_put_contents('ren11.txt',$data,FILE_APPEND | LOCK_EX);
        }
        $data = file_get_contents('ren11.txt');
        print(nl2br($data));

    ?>

</body>
</html>