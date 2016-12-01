<?php

require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice');
if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

//この後のデータベースエラーに関してはメッセージを出力して抜け出す
// $db->setErrorHandling(pear_error_die);  //小文字はダメ
$db->setErrorHandling(PEAR_ERROR_DIE);


// Eggplant with Chili Sauce is spicy
$db->query("UPDATE dishes SET is_spicy = 1
            WHERE dish_name = 'Sesame Seed Puff'");
// Lobster with Chili Sauce is spicy and pricy
$db->query("UPDATE dishes SET is_spicy = 1, price=price * 2
            WHERE dish_name = 'Lobster with Chili Sauce'");

echo 'ok';
