<?php
session_start();

if (!isset($_SESSION['name'])) {
    if (empty($_POST['userName'])) {
        header("Location: index.php");
    } else {
        $_SESSION['name'] = $_POST['userName'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>send</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        jQuery(function($) {
            var $view = $('#view');
            var $data = $('input[name="data"]');

            function getData() {
                $.post('receive.php', {}, function(data) {
                    $view.html(data);
                });
            }

            $('#add').submit(function() {
                event.preventDefault();
                $.post('receive.php', {
                    data: $data.val()
                }, function(data) {
                    $data.val('');
                    $view.html(data);
                });
            });

            getData();
            timerID = window.setInterval(getData, 3000);
        });
    </script>
</head>

<body>
    <div>
        <p>こんにちは、<?php echo $_SESSION['name'] ?>さん！<br>コメントを入力して送信ボタンを押してください。</p>
        <form id="add" action="receive.php" method="post">
            コメント：<input type="text" name="data" value="" size="30" />
            <input type="submit" value="送信" />
            <button onclick="location.href = 'logout.php'">ログアウト</button>
        </form>
        <hr>
        <div id="view">
            <!--ここにデータが入る-->
        </div>
    </div>
</body>

</html>