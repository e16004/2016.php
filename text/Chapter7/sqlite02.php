<?php
try {
  //DBに接続
  $db = new PDO('sqlite:test.db');
  echo "OK!<br>\n";
  //エラー時に例外を返す
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $str = 'It\'s a nice day!';

  //escapeしない   '
  print "Unquoted string:           $str<br>\n";

  //escapeする     ''
  print "Quoted string:             ". $db->quote($str);


} catch (PDOexception $e) {
  die('Cannot Connect: '. $e->getMessage());
}




