<?php

// $meats = "<b>Chicken</b>, <b>Beef</b>, <b>Duck</b>";
$meats = "<b>Chicken</b>, <b>   </b>,<b>      </b> <b>Beef</b> <b>Duck</b>";

// With a non-greedy quantifier, each meat is matched separately
preg_match_all('@<b>.*?</b>@', $meats, $matches1);
foreach ($matches1[0] as $meat) {
    print "Meat A: $meat<br>\n";
}

echo "<br>\n";

// With a greedy quantifier, the whole string is matched just once
preg_match_all('@<b>.*</b>@', $meats, $matches2);
foreach ($matches2[0] as $meat) {
    print "Meat B: $meat<br>\n";
}

echo "<br>\n";
echo "<br>\n";
echo "<br>\n";
echo "<br>\n";
echo "<br>\n";


var_dump($matches1);
var_dump($matches2);



