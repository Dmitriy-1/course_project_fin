<?php
require_once('connect.php');
session_start();

$wash= new Washer();
$wash=$wash->set_washers();
echo '
<select size="3" name="list_washer">
<!--<option selected  >Выберите мойщика</option>-->';
foreach ($wash as $item) {
    echo '<option   value="'.$item[0].'" >' . $item[4] . '  ' . $item[2] . ' ' . $item[5] . '</option>';
}
echo '</select>';
