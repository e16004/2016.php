<?php
//mysqliによるDB接続

// Load the form helper functions.
require '../Chapter6/formhelpers.php';
//domain, username, password, DBname
$db = mysqli_connect('localhost','miyagi','password','practice');
if (! $db) { die("Can't connect: " . mysqli_connect_error()); }
echo "OK<br>\n";
var_dump($db);

//utf-8に変更
if (!mysqli_set_charset($db, "utf8")) {
  printf("Error loading character set utf8: %s<br>\n", mysqli_error($db));
  exit();
}




// Choices for the "spicy" menu in the form
$spicy_choices = array('no','yes','either');


// The main page logic:
// - If the form is submitted, validate and then process or redisplay
// - If it's not submitted, display
if (array_key_exists('_submit_check', $_POST)) {
  // If validate_form() returns errors, pass them to show_form()
  if ($form_errors = validate_form()) {
    echo "pattern bat1<br>\n";
    show_form($form_errors);
  } else {
    // The submitted data is valid, so process it
    echo "pattern good<br>\n";
    process_form();
  }
} else {
  // The form wasn't submitted, so display
  echo "pattern bat2";
  show_form();
}


function show_form($errors = '') {
  // If the form is submitted, get defaults from submitted parameters サブミットされたら、パラメータからデフォルトを取り出す
  if (array_key_exists('_submit_check', $_POST)) {
    $defaults = $_POST;
  } else {
    // Otherwise, set our own defaults サブミットされていなければ独自のセット
    $defaults = array('min_price' => '5.00',
                      'max_price' => '25.00',
                      'dish_name' => 'そば',
                      );
  }

  // If errors were passed in, put them in $error_text (with HTML markup) エラーを$error_textに代入
  if (is_array($errors)) {
    $error_text = '<tr><td>You need to correct the following errors:';
    $error_text .= '</td><td><ul><li>';
    $error_text .= implode('</li><li>',$errors);
    $error_text .= '</li></ul></td></tr>';
  } else {
      // No errors? Then $error_text is blank
      $error_text = '';
  }

  // Jump out of PHP mode to make displaying all the HTML tags easier 一旦PHPから出る まだshow_form()内
?>
  <form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>">
  <table>
  <?php print $error_text ?>

  <tr><td>Dish Name:</td>
  <td><?php input_text('dish_name', $defaults) ?></td></tr>

  <tr><td>Minimum Price:</td>
  <td><?php input_text('min_price', $defaults) ?></td></tr>

  <tr><td>Maximum Price:</td>
  <td><?php input_text('max_price', $defaults) ?></td></tr>

  <tr><td>Spicy:</td>
  <td><?php input_select('is_spicy', $defaults, $GLOBALS['spicy_choices']); ?>
  </td></tr>

  <tr><td colspan="2" align="center"><?php input_submit('search','Search'); ?>
  </td></tr>

  </table>
  <input type="hidden" name="_submit_check" value="1"/>
  </form>
<?php
      } // The end of show_form()


function validate_form() {
  $errors = array();

  // minimum price must be a valid floating point number minimumは小数か？must
  if ($_POST['min_price'] != strval(floatval($_POST['min_price']))) {
    $errors[] = 'Please enter a valid minimum price.';
  }

  // maximum price must be a valid floating point number maximumは小数か？
  if ($_POST['max_price'] != strval(floatval($_POST['max_price']))) {
    $errors[] = 'Please enter a valid maximum price.';
  }

  // minimum price must be less than the maximum price
  if ($_POST['min_price'] >= $_POST['max_price']) {
    $errors[] = 'The minimum price must be less than the maximum price.';
  }
  //通常この処理はされない
  if (! array_key_exists($_POST['is_spicy'], $GLOBALS['spicy_choices'])) {
    $errors[] = 'Please choose a valid "spicy" option.';
  }
  return $errors;
}

function process_form() {
    // Access the global variable $db inside this function
    global $db;

    // build up the query
    $sql = 'SELECT dish_name, price, is_spicy FROM dishes WHERE ';

    // add the minimum price to the query
    $sql .= "price >= '" .
            mysqli_real_escape_string($db, $_POST['min_price']) . "' ";

    // add the maximum price to the query
    $sql .= " AND price <= '" .
            mysqli_real_escape_string($db, $_POST['max_price']) . "' ";

    // if a dish name was submitted, add to the WHERE clause
    // we use mysqli_real_escape_string() and strtr() to prevent
    // user-entered wildcards from working
    if (strlen(trim($_POST['dish_name']))) {
        $dish = mysqli_real_escape_string($db, $_POST['dish_name']);
        $dish = strtr($dish, array('_' => '\_', '%' => '\%'));
        // mysqli_real_escape_string() doesn't add the single quotes
        // around the value so you have to put those around $dish in
        // the query:
        //文字列の前後に％を追加
        $dish = '%'. $dish. '%';
        var_dump($dish);
        $sql .= " AND dish_name LIKE '$dish'";
    }

    // if is_spicy is "yes" or "no", add appropriate SQL
    // (if it's either, we don't need to add is_spicy to the WHERE clause)
    $spicy_choice = $GLOBALS['spicy_choices'][ $_POST['is_spicy'] ];
    if ($spicy_choice == 'yes') {
        $sql .= ' AND is_spicy = 1';
    } elseif ($spicy_choice == 'no') {
        $sql .= ' AND is_spicy = 0';
    }

    // Send the query to the database program and get all the rows back

    $q = mysqli_query($db, $sql);
    var_dump($q);

    if (!$q) {
      printf("Error Message: %s<br>\n", mysqli_error($db));
    }


    if (mysqli_num_rows($q) == 0) {
        print 'No dishes matched.';
    } else {
        print '<table>';
        print '<tr><th>Dish Name</th><th>Price</th><th>Spicy?</th></tr>';
        while ($dish = mysqli_fetch_object($q)) {
            if ($dish->is_spicy == 1) {
                $spicy = 'Yes';
            } else {
                $spicy = 'No';
            }
            printf('<tr><td>%s</td><td>$%.02f</td><td>%s</td></tr>',
                   htmlentities($dish->dish_name), $dish->price, $spicy);
        }
    }
}
?>