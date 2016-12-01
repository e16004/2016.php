<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);

$rows = $db->queryAll('SELECT dish_name, price FROM dishes');
foreach ($rows as $row) {
    print "$row[0], $row[1] <br>\n";
}