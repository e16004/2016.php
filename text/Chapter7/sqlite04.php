<?php
$limit = 1;
try {
  //DBに接続
  $db = new PDO('sqlite:test2.db');
  echo "OK!<br>\n";
  //エラー時に例外を返す
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //not create  test2 table
  // $db->exec('create table test (type int);');
  $db->exec('insert into test (type) values (2);');
  $db->exec('insert into test (type) values (4);');
  var_dump($db);

  //prepared query   use [?]
  $sql = 'select * from test2 where type=? or type=?';
  $stmt = $db->prepare($sql);
  $stmt->execute(array(1,2));

  $result = $stmt->fetchAll();
  var_dump($result);

  echo "type=1,2 の検索結果";



} catch (PDOexception $e) {
  var_dump($e);
  die('Cannot Connect: '. $e->getMessage());
}




