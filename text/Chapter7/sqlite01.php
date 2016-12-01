<?php
$limit = 1;
try {
  //DBに接続
  $db = new PDO('sqlite:test.db');
  echo "OK!<br>\n";
  //エラー時に例外を返す
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //通常のクエリ
  $stmt = $db->query('select * from dishes');
  $result = $stmt->fetchAll();
  var_dump($result);

} catch (PDOexception $e) {
  die('Cannot Connect: '. $e->getMessage());
}




