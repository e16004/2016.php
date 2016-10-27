<?php

$dinner = 'Curry Cuttlefish';

function hungry_dinner() {
    $GLOBALS['dinner'] .= ' and Deep-Fried Taro'. "<br>\n";
    //$dinner += 'and Deep-Fried Taro' の意味になる
}

print "Regular dinner is $dinner";
print "<br>\n";
print "<br>\n";
hungry_dinner();
print "Hungry dinner is $dinner";






