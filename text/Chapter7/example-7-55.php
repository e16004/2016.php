<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
  echo "OK!";
$db->setErrorHandling(PEAR_ERROR_DIE);


$_POST['dishes_name'] = 'そば%';

// First, do normal quoting of the value
$dish = $db->quote($_POST['dish_name']);
// Then, put backslashes before underscores and percent signs
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
// Now, $dish is sanitized and can be interpolated right into the query
$db->query("UPDATE dishes SET price = 1 WHERE dish_name LIKE $dish");





