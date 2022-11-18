<!DOCTYPE html>
<html>

<head>
    <title>rei25</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
        if($contents = @file_get_contents('rei25.txt')){
            $contents = nl2br($contents);
            echo $contents;
        }else{
            print("エラー");
        }
        
    ?>
</body>

</html>