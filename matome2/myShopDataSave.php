<?php
//データ登録処理
//セッション管理のスタート
session_start();
//商品が選択されているかのチェック
//はじめての場合、セッション変数はまだ存在しない
if (isset($_SESSION['items'])) {
    //セッション変数「$items」が存在する=>既に買い物をしている
    //以前選択した商品一覧を配列「$items」にコピー
    $items = $_SESSION['items'];
    //新しく選択した商品を配列の最後に追加
    array_push($items, $_GET['item']);
} else {
    //もしセッション変数が無ければ（初めての買い物）
    //選択した商品を初期データとして配列を作成
    $items = array($_GET['item']);
}
//ページ間で配列内のデータを共有するため、セッション変数に代入
$_SESSION['items'] = $items;
//再度、商品選択画面に自動的に戻る
header("Location:myShopTop.html");
