<?php
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu = implode(', ', $dimsum);
print $menu. "<br>\n";

$dimsum2 = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu2 = implode('</li><li>', $dimsum2);
print "<li>". $menu2. "</li><br>\n";
