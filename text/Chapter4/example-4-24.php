<?php
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "<b>Before Sorting:</b><br>\n";
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value<br>\n";
}

// 配列ごとにソート(array 昇順)
asort($meal);
print "<br>\n";

print "<b>After Sorting:</b><br>\n";
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value<br>\n";
}