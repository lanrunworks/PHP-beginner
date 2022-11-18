<?php

session_start();

if (!empty($_POST['data'])) {
    $data = htmlspecialchars($_POST['data'], ENT_QUOTES);
    $data = "{$_SESSION['name']}「{$data}」" . date('Y-m-d H:i:s') . PHP_EOL;
    file_put_contents('chat.txt', $data, FILE_APPEND | LOCK_EX);
}

$data = file_get_contents('chat.txt');

// 結果を表示
echo nl2br($data);
