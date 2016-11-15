<?php
//error!


// Logic to do the right thing based on
// the hidden _submit_check parameter
// if ($_POST['_submit_check']) {     //original > noticeが出る
if (array_key_exists('_submit_check', $_POST)) {
//validate_formから返されるエラーメッセージの配列が空でなければ、エラーメッセージ引数としてフォームを表示
    // If validate_form() returns errors, pass them to show_form()
    if ($form_errors = validate_form()) {
        echo "pattern 1";
        show_form($form_errors);
    } else {
      //エラーメッセージがからの場合実行
        echo "pattern 2";
        process_form();
    }
} else {
    echo "pattern 3";
    show_form();
}

// Do something when the form is submitted
function process_form() {
    print "Hello, ". $_POST['my_name'];
    print "Your e-mail is". $_POST['e-mail'];
}

// Display the form
function show_form($errors = '') {
    // If some errors were passed in, print them out
    if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print <<< _HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
Your e-mail : <input type="text" name="e-mail">
<br/>
<input type="submit" value="Say Hello">
<input type="hidden" name="_submit_check" value="1">
</form>
_HTML_;
}
// <input type="hidden" name="_submit_check" value="1">
  //↑↑submitされた時hiddenが1になるのでtrueが返る

//add
// Your e-mail : <input type="text" name="e-mail">

// Check the form data
function validate_form() {
    // Start with an empty array of error messages
    $errors = array();

    // Add an error message if the name is too short
    if (strlen($_POST['my_name']) < 3) {
        $errors[] = 'Your name must be at least 3 letters long.';
    }

    //add
    if (! preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $_POST['e-mail'])) {
    $errors[] = 'Please enter a valid e-mail address';
    } else {
    $errors[] = 'nice';
    }

    // Return the (possibly empty) array of error messages
    return $errors;
}




