<?php
require_once('connect.php');
session_start();

$sinks=new Sinks();
$sinks=$sinks->set_sinks_addres();

echo '
<select size="3" name="list_address">
<!--<option selected  >Выберите услуги</option>-->';
foreach ($sinks as $item) {
    echo '<option   value="'.$item[0].'" >' . $item[1] . ' </option>';
}
echo '</select>';