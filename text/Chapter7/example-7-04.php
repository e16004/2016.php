<?php

require 'MDB2.php'; //paerのmdb2モジュールをロード

//↓ db_program://USER:PASS@ドメイン/データベース名
$db = MDB2::connect('mysql://miyagi:password@localhost/practice');
// $db = DB::connect('mysqli://penguin:top^hat@db.example.com/restaurant');     でも可 [mysqli]

if (MDB2::isError($db)) { die("Can't connect: " . $db->getMessage()); }
echo "OK!<br>\n";

$q = $db->query("CREATE TABLE dishes (
  dish_id INT primary key auto_increment,
  dish_name VARCHAR(255),
  price DECIMAL(4,2),
  is_spicy INT
)");

if (MDB2::isError($q)) { die("query error : " . $q->getMessage()); }


/*$q = $db->query("drop table dishes");
if (MDB2::isError($q)) { die("query error2 : " . $q->getMessage()); }*/


