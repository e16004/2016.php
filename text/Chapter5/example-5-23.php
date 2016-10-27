<?php

$dinner = 'Curry Cuttlefish';

function vegetarian_dinner() {
    global $dinner;
    print "Dinner was $dinner, but now it's ";
    $dinner = 'Sauteed Pea Shoots';
    print "<b>$dinner</b>";
    print "<br>\n";
}

print "Regular Dinner is <b>$dinner</b>.<br>\n";
vegetarian_dinner();
print "Regular dinner is <b>$dinner</b>";