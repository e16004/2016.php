<?php

// 1度目の処理：get example-6-01 を呼び post は空なので elseが実行される
// 2度目の処理：1度目の後submitされて 再度example-6-01 を呼ぶとpostに値があるので trueが実行


if (array_key_exists('my_name',$_POST)) {
    print "Heeello, ". $_POST['my_name'];
// if (array_key_exists('my_name',$_GET)) {
//     print "Heeello, ". $_GET['my_name'];
} else {
    print<<<_HTML_
<form method="post" action="{$_SERVER['SCRIPT_NAME']}">
 Your name: <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}