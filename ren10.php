<!DOCTYPE html>
<html>

<head>
    <title>ren10</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
        if($contents = @file_get_contents('ren10.txt')){
             //配列の形でそれぞれの人名を格納
            $names = explode(PHP_EOL,$contents);
            print("<table border='1'>");
            foreach($names as $n){
                $pos = strpos($n,",");
                $familyName = substr($n,0,$pos);
                $firstName = substr($n,$pos + 1);
                print("<tr><td>".$familyName."</td><td>".$firstName."</td></tr>");
            }
            print("</table>");
        }else{
            print("ファイルが開けません");
        }
       

    ?>
</body>

</html>