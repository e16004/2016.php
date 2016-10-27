<?php

function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}



// Find the total cost of a $15.22 meal with 8.25% tax and a 15% tip
// $total = restaurant_check(15.22, 8.25, 15);

//random
$meal = rand(10, 30);
$tax = rand(3, 10);
$tip = rand(5, 25);
$total = restaurant_check($meal, $tax, $tip);
var_dump($meal);
var_dump($tax);
var_dump($tip);
var_dump($total);


$money = rand(10, 50); //手持ち金
print "I only have $money in cash, so...";
if ($total > $money) {
    print "I must pay with my credit card.";
} else {
    print "I can pay with cash.";
}



// echo restaurant_check(2, 100, 4);
