<?php

function display_wordpress() {
  echo 'WordPress<br>';
}
display_wordpress();


function add($n1, $n2) {
  $answer = $n1 + $n2;
  return $answer. '<br>';
}
$sum = add(4, 5);
echo $sum;

echo add(32, 64);




 ?>