<?php
require 'MDB2.php';

$db = MDB2::connect('mysql://miyagi:password@localhost/practice');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
echo "OK<br>\n";

//トランザクションサポート有無を調べる
if (!$db->supports('transactions')) {
  echo 'トランザクションサポート無し';
  exit();
}


//トランザクション オープン
$res = $db->beginTransaction();


$q = $db->query("INSERT INTO dishes (dish_name, price, is_spicy)
    VALUES ('transaction test', 2.50, 0)");

if (MDB2::isError($q)) { die("connection error: " . $q->getMessage()); }

echo "OK OK<br>\n";


$res = $db->commit();

if (MDB2::isError($res)) { die("connection error: " . $res->getMessage()); }

echo "OK OK OK<br>\n";




