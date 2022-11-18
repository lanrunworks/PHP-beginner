<body>
    <h2>表示した時間（秒）によって異なる画像を表示します</h2>
    <table border="1">
        <tr>
            <th>秒数</th>
            <th>ファイル名</th>
        </tr>
        <tr>
            <td>0-14</td>
            <td>Desert.jpg</td>
        </tr>
        <tr>
            <td>15-29</td>
            <td>Koala.jpg</td>
        </tr>
        <tr>
            <td>30-44</td>
            <td>Lighthouse.jpg</td>
        </tr>
        <tr>
            <td>45-59</td>
            <td>Penguins.jpg</td>
        </tr>
    </table>
    <hr>
    <?php
        //秒数の格納変数
        $sec=date("s");
        print(date("Y年m月d日(土) H時i分s秒")."<br>");
        //14秒以下の場合
        if($sec<=14){
            $gazo = "img/Desert.jpg";
        }
        //29秒以下の場合
        else if ($sec <= 29) {
            $gazo = "img/Koala.jpg";
        }
        //44秒以下の場合
        else if ($sec <= 44) {
            $gazo = "img/Lighthouse.jpg";
        } 
        //それ以外
        else {
            $gazo = "img/Penguins.jpg";
        }
    
        
       //$gazoのパスから画像を表示 
        print("<img src='{$gazo}'>");
    ?>
</body>