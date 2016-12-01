<?php

require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice');

if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }
echo "MDB2 connect OK<br>\n";

$db->setErrorHandling(PEAR_ERROR_DIE);

// Decrease the price some some dishes
$count = $db->exec("UPDATE dishes SET price=price - 1 WHERE price > 5");
// print 'Changed the price of ' . $db->affectedRows() . 'rows.';
print 'Changed the price of ' . $count. 'rows.';



