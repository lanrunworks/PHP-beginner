<body>
    <h2>1~100で5と7の公倍数を表示</h2>
    <hr>
    <?php
        for($new=1;$new<=100;$new++){
            //5と7を割り切ることができれば公倍数
            if($new%5==0 && $new%7==0){
                print($new."<br>");
            }
        }
    ?>
</body>