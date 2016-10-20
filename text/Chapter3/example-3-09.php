<?php

$price_1 = 1.001;
$price_2 = 1.00100000001234;

if(abs($price_1 - $price_2) < 0.00001) {
    print '$price_1 and $price_2 are equal.';
} else {
    print '$price_1 and $price_2 are not equal.';
}
