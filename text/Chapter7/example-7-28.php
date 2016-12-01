<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
echo "MDB2 connect OK<br>\n";

$db->setErrorHandling(PEAR_ERROR_DIE);

$_POST['new_dish_name'] = 'カツカレー';
$_POST['new_price'] = 23;
$_POST['is_spicy'] = 15;

$sth = $db->prepare('INSERT INTO dishes (dish_name,price,is_spicy) VALUES (?,?,?)');
$sth->execute(array($_POST['new_dish_name'], $_POST['new_price'],
                 $_POST['is_spicy']));



