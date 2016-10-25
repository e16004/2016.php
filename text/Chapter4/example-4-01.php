<?php
// An array called $vegetables with string keys
$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';

var_dump($vegetables);

// An array called $dinner with numeric keys
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';

var_dump($dinner);

// An array called $computers with numeric and string keys
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';

var_dump($computers);

//------------------------------------
//unset() practice

echo "以下 nuset() の練習<br> \$dinner の配列を消す";
var_dump($vegetables);
unset($vegetables['beet']);
var_dump($vegetables);
unset($vegetables['corn']);
var_dump($vegetables);





