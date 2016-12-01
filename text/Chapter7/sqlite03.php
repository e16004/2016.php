<?php
$limit = 1;
try {
  //DBに接続
  $db = new PDO('sqlite:test.db');
  echo "OK!<br>\n";
  //エラー時に例外を返す
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //create  test table
  $db->exec('create table test (type int);');
  $db->exec('insert into test (type) values (1);');
  $db->exec('insert into test (type) values (3);');
  var_dump($db);

  //prepared query
  $sql = 'select * from test where type=:type1 or type=:type2';
  $stmt = $db->prepare($sql);
  $stmt->execute(array(':type1'=>1, ':type2'=>2));

  $result = $stmt->fetchAll();
  var_dump($result);

  echo "type=1,2 の検索結果";

} catch (PDOexception $e) {
  die('Cannot Connect: '. $e->getMessage());
}




