<?php

function vegetarian_dinner() {
    print "Dinner is $dinner, or ";   //noticeが出る 変数値が存在しない
    $dinner = 'Sauteed Pea Shoots';   //ローカル変数内の新しい変数
    print $dinner;
    print "<br>\n";
}

function kosher_dinner($dinner2) {
    print "Dinner is $dinner2, or ";   //noticeは出ない
    $dinner = 'Kung Pao Chicken';
    print $dinner;
    print "<br>\n";
}


$dinner = 'Curry Cuttlefish';

//Curry Cuttlefish,  Sauteed Pea Shoots,  Kung Pao Chicken の $dinnerは別物


print "Vegetarian ";
vegetarian_dinner();
print "<br>\n";

print "Kosher ";
kosher_dinner('tttttteeeeeeessssssttttttt');
print "<br>\n";

//グローバル変数なので$dinnerで表示可
print "Regular dinner is $dinner";



