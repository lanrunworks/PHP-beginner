<body>
    <?php
        //乱数を発生させる
        $val = rand(0,3);       //0から3の乱数
        //switch文による分岐
        switch($val){
            case 0:
                $gazo = "img/daikichi.png";
                break;
            case 1:
                $gazo = "img/chukichi.png";
                break;
            case 2:
                $gazo = "img/suekichi.png";
                break;
            case 3:
                $gazo = "img/kyo.png";
                $gazo = "img\chukichi.png";
                break;
                
        }
        //おみくじの表示
        print("<img src='{$gazo}'>");

    ?>
</body>