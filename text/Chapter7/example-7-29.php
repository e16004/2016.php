<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);

$dish_id = $db->nextID('dishes2');
echo '$dish_id'. $dish_id. '<br>\n';



// $dish_id = $db->nextID('dishes2');
$db->query("INSERT INTO dishes2 (dish_id, dish_name, price, is_spicy)
    VALUES ($dish_id, 'Fried Bean Curd', 1.50, 0)");



echo "OK<br>\n";



