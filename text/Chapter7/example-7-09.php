<?php

require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice');
if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

//この後のデータベースエラーに関してはメッセージを出力して抜け出す
// $db->setErrorHandling(pear_error_die);  //小文字はダメ
$db->setErrorHandling(PEAR_ERROR_DIE);


$q = $db->query(
  "INSERT INTO dishes (dish_size, dish_name, price, is_spicy)
    VALUES ('large', 'Sesame Seed Puff', 2.50, 0)");

// if (MDB2::isError($q)) { die("query error: " . $q->getMessage()); }

echo 'Query Succeeded';

