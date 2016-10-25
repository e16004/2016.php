<?php
$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "<b>Before Sorting:</b><br>\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value<br>\n";
}
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value<br>\n";
}

//$dinner と $meal をソート(通常昇順)
sort($dinner);
sort($meal);
print "<br>\n";


//$dinner と $meal 逆順でソート(reverse 降順)
/*rsort($dinner);
rsort($meal);
print "<br>\n";*/


//$dinner と $meal をキーでソート(key 昇順)
/*ksort($dinner);
ksort($meal);
print "<br>\n";*/



print "<b>After Sorting:</b><br>\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value<br>\n";
}
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value<br>\n";
}