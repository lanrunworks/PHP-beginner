<body>
    <?php
        //送信されたデータを取得
        //メソッドでpostを使ったので$_POSTのスーパーグローバル変数を使う
        //送信されたデータのname属性を、連想配列のキーとして使用する
        print("<h2>ようこそ{$_POST['userName']}さん</h2>");
        // print("<h2>ようこそ{$_GET['userName']}さん</h2>");        
    ?>
    <a href="rei18_InputName.html">入力画面に戻る</a>
</body>