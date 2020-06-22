<?php
require_once('connect.php');
session_start();

$services=new Services();
$services=$services->set_services();
echo '
<select size="3" name="list_services">
<!--<option selected  >Выберите услуги</option>-->';
foreach ($services as $item) {
    echo '<option   value="'.$item[0].'" >' . $item[1] . ' </option>';
}
echo '</select>';
