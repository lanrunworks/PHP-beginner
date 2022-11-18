<!DOCTYPE html>
<html>

<head>
    <title>ren12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <p>名前とコメントを入力して送信ボタンを押してください。</p>
        <p>コメント未入力で送信ボタンを押すとページを更新します。</p>
        <form id="add" action="ren12.php" method="post">
            名前：<input type="text" name="userName" value="" size="10" />
            コメント：<input type="text" name="data" value="" size="30" />
            <input type="submit" value="送信" />
        </form>
        <hr>
        <div>
            <?php
            if (!empty($_POST['data'])) {
                if (!empty($_POST['userName'])) {
                    $userName = $_POST['userName'];
                } else {
                    $userName = '名無し';
                }

                $data = $_POST['data'];
                
                $data = "{$userName}「{$data}」" . date('Y-m-d H:i:s') . PHP_EOL;
                file_put_contents('ren12.txt', $data, FILE_APPEND | LOCK_EX);

            }
            $data = file_get_contents('ren12.txt');
            echo nl2br($data);
            ?>
        </div>
    </div>
</body>

</html>