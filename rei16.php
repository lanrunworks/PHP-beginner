<body>
    <h2>配列の値を並び替え、すべての要素を表示する</h2>
    <hr>
    <?php
        //配列の作成と初期化
        //配列変数名：$pref
        //初期化 array(値0,値1,値2,値3・・・・)
        $pref=array('lemon','apple','meron','banana','orange');
        //sort関数で値を昇順に並び替え、インデックス（要素）を振り直す
        sort($pref);
        //count関数で配列の要素数を取得
        //インデックスの最大値は要素数に-1
        for($i=0; $i<count($pref); $i++){
            //配列の呼び出し$配列名[インデックス番号]
            //インデックス番号は0~
            print("配列{$i}の値は{$pref[$i]}です<br>");
        }

    ?>
</body>