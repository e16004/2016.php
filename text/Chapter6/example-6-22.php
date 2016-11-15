<?php

$_POST['comments'] = <<<_COMM_
これはコメント<b>強調</b>です。<br>
これはコメント<i>イタリック<i/>です。<br>
_COMM_;

$_POST['comments2'] = <<<_COMM2_
これはコメント&lt;b&gt;強調&lt;/b&gt;です。&lt;br&gt;
これはコメント&lt;i&gt;イタリック&lt;i/&gt;です。&lt;br&gt;
_COMM2_;


// 通常実行
$comments = $_POST['comments'];
print $comments;
echo "<br>\n";


$comments = htmlentities($_POST['comments']);
// Now it's OK to print $comments
print $comments;
echo "<br>\n";
echo "<br>\n";


echo "-----------------------------------------------<br><br>";

// 別のテスト
$comments2 = $_POST['comments2'];
print $comments2;
echo "<br>\n";
echo "<br>\n";

$comments2 = htmlentities($_POST['comments2']);
print $comments2;


