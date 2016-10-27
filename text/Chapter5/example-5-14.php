<?php

$totals = restaurant_check2(15.22, 8.25, 15);
$method = payment_method(20, $total);
var_dump($totals);
var_dump($method);

if ($totals[0] < 20) {
    print "The total without tip is less than $20.<br>\n";
}
if ($totals[1] < 20) {
    print "The total with tip is less than $20.<br>\n";
}
print "I will pay with  $method<br>\n";

function restaurant_check2($meal, $tax, $tip) {
    $tax_amount  = $meal * ($tax / 100);
    $tip_amount  = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip   = $meal + $tax_amount + $tip_amount;

    return array($total_notip, $total_tip);
}

function payment_method($cash_on_hand, $amount) {
    if ($amount > $cash_on_hand) {
        return 'credit card';
    } else {
        return 'cash';
    }
}







