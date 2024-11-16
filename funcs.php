<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
  try {
      $db_name = "**";    //データベース名
      $db_id   = "**";      //アカウント名
      $db_pw   = "";      //パスワード：XAMPPはパスワード無しに修正してください。
      $db_host = "localhost"; //DBホスト
      return new PDO('mysql:dbname=liveonce_php02;charset=utf8;host=mysql3102.db.sakura.ne.jp', 'liveonce', '2Mu5sXKtNb5w');
  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//SQLエラー
function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}

//SessionCheck(スケルトン)
function sschk(){

}
