<?php
/*
    if(!empty($_POST['data'])){
        $data = $_POST['data'];
        $data = $_POST['data'].PHP_EOL;
        file_put_contents('ren13.txt',$data,FILE_APPEND | LOCK_EX);
    }
    $data = file_get_contents('ren13.txt');
    print(nl2br($data));
*/

    //ユーザ名、時刻を追加した形（ren12.phpと同じ）
    if (!empty($_POST['data'])) {
        if (!empty($_POST['userName'])) {
            $userName = $_POST['userName'];
        } else {
            $userName = '名無し';
        }

        $data = $_POST['data'];
        
        $data = "{$userName}「{$data}」" . date('Y-m-d H:i:s') . PHP_EOL;
        file_put_contents('ren14.txt', $data, FILE_APPEND | LOCK_EX);

    }
    $data = file_get_contents('ren14.txt');
    echo nl2br($data);
