<?php
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "<b>Before Sorting:</b>\n<br>";
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value\n<br>";
}

//$meal を逆にソート(array reverse 降順ソート)
arsort($meal);
print "\n<br>";

print "<b>After Sorting:</b>\n<br>";
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value\n<br>";
}