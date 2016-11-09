<?php

$members=<<<TEXT

Name               E-Mail Address
------------------------------------------------
Inky T. Ghost      inky@pacman.example.com
Donkey K. Gorilla  kong@banana.example.com
Mario A. Plumber   mario@franchise.example.org
Bentley T. Bear    bb@xtal-castles.example.net
TEXT;


// \0 : inky@pacman.example.com
// \1 : inky
// \2 : pacman.example.com
// \3 : example.





echo "\n\n\n \\1 and \\2 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   '\\1 at \\2', $members);

echo "\n\n\n \\1 and \\3 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   '\\1 at \\3', $members);

echo "\n\n\n \\2 and \\1 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   '\\2 at \\1', $members);

echo "\n\n\n \\2 and \\3 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   '\\2 at \\3', $members);

echo "\n\n\n \\3 and \\2 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   '\\3 at \\2', $members);

echo "\n\n\n \\1 and \\2 and \\3 \n";
print preg_replace('/([^@\s]+)@(([-a-z0-9]+\.)+[a-z]{2,})/',
                   "\\0 aaaaaaaaaaaa\n \\1 iiiiiiiiiii \\2 uuuuuuuuuuuuuu \\3 eeeeeeeeeeeee \\4 oooooooo \\5 \n", $members);







