<?php
$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;

$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Asparagus'] +
                             $prices['dinner']['Braised Bamboo Fungus'];

var_dump($prices);

echo $specials[0][0] = 'Chestnut Bun'."\n<br>";
echo $specials[0][1] = 'Walnut Bun'."\n<br>";
echo $specials[0][2] = 'Peanut Bun'."\n<br>";
echo $specials[1][0] = 'Chestnut Salad'."\n<br>";
echo $specials[1][1] = 'Walnut Salad'."\n<br>";
// Leaving out the index adds it to the end of the array
// This creates $specials[1][2]
echo $specials[1][] = 'Peanut Salad'."\n<br>";