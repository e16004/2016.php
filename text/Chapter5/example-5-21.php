<?php

$dinner = 'Curry Cuttlefish';

function macrobiotic_dinner() {
    $dinner = "Some Vegetables";    //ローカル変数
    print "Dinner is $dinner";
    print "<br>\n";
    // Succumb to the delights of the ocean
    print " but I'd rather have ";
    print $GLOBALS['dinner'];       //グローバル変数
    // print $globals['dinner'];       //globals は大文字
    print "<br>\n";
}

macrobiotic_dinner();
print "Regular dinner is: $dinner";







