<?php
$dishes['Beef Chow Foon'] = 12;
echo $dishes['Beef Chow Foon']. "<br>";
$dishes['Beef Chow Foon']++;
echo $dishes['Beef Chow Foon']. "<br>";
$dishes['Roast Duck'] = 3;

$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];

if ($dishes['total'] > 15) {
    print "You ate a lot: <br>";
}

print 'You ate ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon.';