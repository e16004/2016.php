<?php
$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
// for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
for ($i = 0; $i < count($dinner); $i++) {
  print "Dish number $i is $dinner[$i]<br>\n";
}