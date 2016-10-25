<?php
$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);
var_dump($fish);
var_dump($fish_list);
print "The second fish is $fish_list[1]";
print "<br>\n";
print "fish の表示↓<br>\n". $fish;
