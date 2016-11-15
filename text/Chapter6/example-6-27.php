<?php

$main_dishes = array('cuke' => 'Braised Sea Cucumber',
                     'stomach' => "Sauteed Pig's Stomach",
                     'tripe' => 'Sauteed Tripe with Wine Sauce',
                     'taro' => 'Stewed Pork with Taro',
                     'giblets' => 'Baked Giblets with Salt',
                     'abalone' => 'Abalone with Marrow and Duck Feet');


print '<select name="main_dish[]" multiple="multiple">';

$defaults['main_dish'] = array('cuke', 'tripe');

$selected_options = array();
foreach ($defaults['main_dish'] as $option) {
    $selected_options[$option] = true;
}
/*
$selected_options には以下が入る

$selected_options array(
  'cuke' => true,
  'tripe' => true,
)
*/


// print out the <option> tags
foreach ($main_dishes as $option => $label) {
    print '<option value="' . htmlentities($option) . '"';
    if (array_key_exists($option, $selected_options)) {
        print ' selected="selected"';
    }
    print '>' . htmlentities($label) . '</option>';

    print "\n";
}
print '</select>';

/*
  true
<option value="cuke" selected="selected">料理名</option>\n

  false
<option value="stomach">料理名</option>\n
*/



