<?php

$data = $_POST['data'];
// 送信された文字列に「」を付け足す
$data = "「{$data}」";

// クライアントに値を返す
echo nl2br($data);

// PHP 終了タグを書かずに、ここでスクリプトを終わります。