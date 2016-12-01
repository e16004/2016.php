<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
echo "OK!<br>\n";
$db->setErrorHandling(PEAR_ERROR_DIE);


$_POST['dish_search'] = '%そば%';
$_POST['dish_search'] = '_そば';
// $_POST['dish_search'] = "General Tso's Chicken";
// First, do normal quoting of the value
$dish = $db->quote($_POST['dish_search']);
echo 'quote()';
var_dump($dish);
// Then, put backslashes before underscores and percent signs
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
echo 'strtr()';
var_dump($dish);

//'そば' のようなリテラルを↓に置き換える
$dish = preg_replace('/^\'/', '\'%', $dish);
$dish = preg_replace('/\'$/', '%\'', $dish);
echo 'preg_replace()';
var_dump($dish);


// Now, $dish is sanitized and can be interpolated right into the query

$matches = $db->queryAll("SELECT dish_name, price FROM dishes
                        WHERE dish_name LIKE $dish");

echo "OK!!!";

var_dump($matches);