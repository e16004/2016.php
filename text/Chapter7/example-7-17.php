<?php

require 'MDB2.php';
$db = MDB2::connect('mysql://miyagi:password@localhost/practice');
if (MDB2::isError($db)) { die("connection error: " . $db->getMessage()); }

$db->setErrorHandling(PEAR_ERROR_DIE);

//これが無いと else が実行され すべて消える
$make_things_cheaper = true;

// remove expensive dishes
if ($make_things_cheaper) {
    $db->query("DELETE FROM dishes WHERE price > 19.95");
} else {
    // or, remove all dishes
    $db->query("DELETE FROM dishes");
}

echo 'ok!';

