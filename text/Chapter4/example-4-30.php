<?php
$flavors = array('Japanese' => array('hot' => 'wasabi',
                                     'salty' => 'soy sauce'),
                 'Chinese'  => array('hot' => 'mustard',
                                     'pepper-salty' => 'prickly ash'));

// $culture is the key and $culture_flavors is the value (an array)
foreach ($flavors as $culture => $culture_flavors) {
        // 2つはエラー 2次元配列なのでforeach 2つ必要 １次元配列なら表示可
        // print $flavors. "<br>\n";
        // print $culture_flavors. "<br>\n";
        print $culture. "aaaaaaaaaa!<br>\n";
    // $flavor is the key and $example is the value
    foreach ($culture_flavors as $flavor => $example) {
        print "A $culture $flavor flavor is $example.<br>\n";
    }
}