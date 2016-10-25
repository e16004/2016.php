<?php
$meals = array('breakfast' => array('Walnut Bun','Coffee'),
               'lunch'     => array('Cashew Nuts', 'White Mushrooms'),
               'snack'     => array('Dried Mulberries','Salted Sesame Crab'));

$lunches = array( array('Chicken','Eggplant','Rice'),
                  array('Beef','Scallions','Noodles'),
                  array('Eggplant','Tofu'));

$flavors = array('Japanese' => array('hot' => 'wasabi',
                                     'salty' => 'soy sauce'),
                 'Chinese'  => array('hot' => 'mustard',
                                     'pepper-salty' => 'prickly ash'));


var_dump($meals);



print $meals['lunch'][1]. "\n<br>";            // White Mushrooms
print $meals['snack'][0]. "\n<br>";            // Dried Mulberries
print $lunches[0][0]. "\n<br>";                // Chicken
print $lunches[2][1]. "\n<br>";                // Tofu
print $flavors['Japanese']['salty']. "\n<br>";  // soy sauce
print $flavors['Chinese']['hot']. "\n<br>";    // mustard

