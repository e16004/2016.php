<?php

$sweets = array('puff' => 'Sesame Seed Puff',
                'square' => 'Coconut Milk Gelatin Square',
                'cake' => 'Brown Sugar Cake',
                'ricemeat' => 'Sweet Rice and Meat');


if (array_key_exists('_submit_check', $_POST)) {
    // If validate_form() returns errors, pass them to show_form()
    if ($form_errors = validate_form()) {
        echo "failure 1<br>\n";
        show_form($form_errors);
    } else {
      //エラーメッセージが空の場合実行
        echo "success 1<br>\n";
        process_form();
    }
} else {
    echo "failure 2<br>\n";
    show_form();
}



function process_form() {
  echo $GLOBALS['sweets'] [$_POST['order']]. "が選択された。";
}




// Display the form
function show_form() {
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Order: <select name="order">

_HTML_;
// $val is the option value, $choice is what's displayed
foreach ($GLOBALS['sweets'] as $val => $choice) {
    print "<option value=\"$val\">$choice</option>\n";
}
print<<<_HTML_
</select>
<br/>
<input type="submit" value="Order">
<input type="hidden" name="_submit_check" value="1">
</form>
_HTML_;
}

//submitされた値のチェック
function validate_form() {
    // Start with an empty array of error messages
    $errors = array();

    if(!array_key_exists($_POST['order'], $GLOBALS['sweets'])) {
      $errors[] = "注文を正しく選択してください";
    }

    // Return the (possibly empty) array of error messages
    return $errors;
}
















