<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);



$q = $db->query('SELECT dish_name, price FROM dishes');
while ($row = $q->fetchRow()) {
    print "$row[0], $row[1] <br>\n";
}