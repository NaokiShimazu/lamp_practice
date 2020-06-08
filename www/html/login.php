<?php
// 定数ファイル読み込み
require_once '../conf/const.php';
// 関数ファイル読み込み
require_once MODEL_PATH . 'functions.php';

// セッション開始
session_start();

// ログインが成功した場合
if(is_logined() === true){
  // 商品一覧ページに移動
  redirect_to(HOME_URL);
}

// viewファイル読み込み
include_once VIEW_PATH . 'login_view.php';