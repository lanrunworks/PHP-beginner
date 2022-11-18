<body>
    <?php
        //echoは出力をカンマで繋ぐことができる
        echo "PHPのバージョンは",PHP_VERSION;
        echo "<br>";
        echo "PHPが起動中のOSの種類は",PHP_OS;
        echo "<br>";
        //マジック定数
        echo "実行中のファイルパスは",__DIR__;
        echo "<br>";
        //定数の定義
        define("TEISU",123);
        echo "定義した値は",TEISU;
    ?>
</body>