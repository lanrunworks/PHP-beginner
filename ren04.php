<body>
    <h2>現在の日時と曜日、時刻を表示</h2>
    <hr>
    <?php
        //date関数を用いて現在の曜日（数値）を代入
        $week=date("w");
        //先の変数を使用して各曜日の現在日時を出力
        switch($week){
            case 0:
                print(date("Y年m月d日(日) H時i分s秒")."<br>");
            break;
            case 1:
                print(date("Y年m月d日(月) H時i分s秒")."<br>");
            break;
            case 2:
                print(date("Y年m月d日(火) H時i分s秒")."<br>");
            break;
            case 3:
                print(date("Y年m月d日(水) H時i分s秒")."<br>");
            break;
            case 4:
                print(date("Y年m月d日(木) H時i分s秒")."<br>");
            break;
            case 5:
                print(date("Y年m月d日(金) H時i分s秒")."<br>");
            break;
            case 6:
                print(date("Y年m月d日(土) H時i分s秒")."<br>");
            break;

        }
    ?>
</body>