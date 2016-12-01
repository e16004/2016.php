<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
echo "OK!<br>\n";
$db->setErrorHandling(PEAR_ERROR_DIE);



$_POST['dish_name'] = '%そば%';
$sth = $db->prepare('UPDATE dishes SET price = 1 WHERE dish_name LIKE ?');
$sth->execute(array($_POST['dish_name']));

