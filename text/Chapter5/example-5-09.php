<?php

function countdown($top) {
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "boom!<br>\n";
}

//$counter にしても グローバル変数には影響しない > 結果は同じ
/*function countdown($counter) {
    while ($counter > 0) {
        print "$counter..";
        $counter--;
    }
    print "boom!<br>\n";
}*/



$counter = 7;
countdown($counter);
print "Now, counter is $counter";



