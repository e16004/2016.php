<?php

// Get the epoch timestamp for 6 months ago ６ヶ月前
$range_start = strtotime('6 months ago');
// $range_start = strtotime('1 seconds ago');  //1秒前
// Get the epoch timestamp for right now 現在時間
$range_end   = time();


// 4-digit year is in $_POST['yr']
$_POST['yr'] = '2016';
// 2-digit month is in $_POST['mo']
$_POST['mo'] = '10';
// 2-digit day is is $_POST['dy']
$_POST['dy'] = '31';


$submitted_date = strtotime($_POST['yr'] . '-' .
                            $_POST['mo'] . '-' .
                            $_POST['dy']);

/*
//同じ結果 join ver
$_POST['time'] = array(2016, 10, 31);
$submitted_date2 = strtotime(join('-', $_POST['time']));
var_dump($submitted_date2);
var_dump($submitted_date);
*/

var_dump($range_start);
var_dump($submitted_date);
var_dump($range_end);
echo time();

//６ヶ月前から現在時刻までの間かどうか
if (($range_start > $submitted_date) || ($range_end < $submitted_date)) {
    $errors[] = 'Please choose a date less than six months old.';
}