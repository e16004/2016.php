<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }


$db->setErrorHandling(PEAR_ERROR_DIE);


$_POST['dish_search'] = '%そば%';
echo "OK!<br>\n";
$sth = $db->prepare('select dish_name, price from dishes where dish_name like ?');
$result = $sth->execute(array($_POST['dish_search']));

$matches = $result->fetchAll();

echo "OK!!<br>\n";
var_dump($matches);
