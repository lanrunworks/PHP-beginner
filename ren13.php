<?php
    if(!empty($_POST['data'])){
        $data = $_POST['data'];
        $data = $_POST['data'].PHP_EOL;
        file_put_contents('ren13.txt',$data,FILE_APPEND | LOCK_EX);
    }
    $data = file_get_contents('ren13.txt');
    print(nl2br($data));
