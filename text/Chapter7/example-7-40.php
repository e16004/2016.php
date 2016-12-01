<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);

$cheapest_dish = $db->queryOne('SELECT dish_name, price
                              FROM dishes ORDER BY price LIMIT 1');
print "The cheapest dish is $cheapest_dish";