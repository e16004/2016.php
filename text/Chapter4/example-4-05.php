<?php
// Create $lunch array with two elements
// This sets $lunch[0] 追加する
var_dump($lunch);
$lunch[] = 'Dried Mushrooms in Brown Sauce';
// This sets $lunch[1] 追加する
var_dump($lunch);
$lunch[] = 'Pineapple and Yu Fungus';
var_dump($lunch);

// Create $dinner with three elements
$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken',
                'Braised Bamboo Fungus');
// Add an element to the end of $dinner
// This sets $dinner[3]
$dinner[] = 'Flank Skin with Spiced Flavor';

var_dump($dinner);