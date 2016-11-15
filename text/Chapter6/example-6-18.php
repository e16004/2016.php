<?php

$sweets = array('Sesame Seed Puff','Coconut Milk Gelatin Square',
                 'Brown Sugar Cake','Sweet Rice and Meat');


if (array_key_exists('_submit_check', $_POST)) {
//validate_formから返されるエラーメッセージの配列が空でなければ、エラーメッセージ引数としてフォームを表示
    // If validate_form() returns errors, pass them to show_form()
    if ($form_errors = validate_form()) {
        echo "pattern 1<br>\n";
        show_form($form_errors);
    } else {
      //エラーメッセージがからの場合実行
        echo "pattern 2<br>\n";
        process_form();
    }
} else {
    echo "pattern 3<br>\n";
    show_form();
}



function process_form() {
  echo $_POST['order']. "が選択された。";
}

// Display the form
function show_form($errors='') {
     if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Order: <select name="order">

_HTML_;
foreach ($GLOBALS['sweets'] as $choice) {
    print "<option>$choice</option><br>\n";
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

    if(!in_array($_POST['order'], $GLOBALS['sweets'])) {
      $errors[] = "注文を正しく選択してください";
    }

    // Return the (possibly empty) array of error messages
    return $errors;
}


