<body>
    <h2>配列の値を表示する</h2>
    <hr>
    <?php
        //配列の作成と初期化
        //配列変数名：$pref
        //初期化 array(値0,値1,値2,値3・・・・)
        $pref=array('茨城','栃木','千葉','埼玉','東京');

        for($i=0; $i<=4; $i++){
            //配列の呼び出し$配列名[インデックス番号]
            //インデックス番号は0~
            print("配列{$i}の値は{$pref[$i]}です<br>");
        }
        //配列変数の値の変更
        $pref[4]="神奈川";
        print("配列4の値を{$pref[4]}に変更しました<br>");
    ?>
</body>