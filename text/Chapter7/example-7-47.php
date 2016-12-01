<?php
require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice?charset=utf8');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);

// Change the fetch mode to objects
$db->setFetchMode(MDB2_FETCHMODE_OBJECT);


print "With query() and fetchRow(): <br>\n";
// get each row with query() and fetchRow();
$q = $db->query("SELECT dish_name, price FROM dishes");
while($row = $q->fetchRow()) {
    print "The price of $row->dish_name is $row->price <br>\n";
}


print "With queryAll(): <br>\n";
// get all the rows with queryAll();
$dishes = $db->queryAll('SELECT dish_name, price FROM dishes');
foreach ($dishes as $dish) {
    print "The price of $dish->dish_name is $dish->price <br>\n";
}

print "With queryRow(): <br>\n";
$cheap = $db->queryRow('SELECT dish_name, price FROM dishes
    ORDER BY price LIMIT 1');
print "The cheapest dish is $cheap->dish_name with price $cheap->price";