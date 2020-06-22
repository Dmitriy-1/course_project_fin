<?php
require_once('connect.php');
session_start();

$provider=new Provider();
$provider=$provider->set_provider_list();
echo '
<select size="3" name="list_prov">
';
for ($i = 0; $i < count($provider); $i++){
    echo '
        <option   value="'.$provider[$i][0].'" >' . $provider[$i][0]. ' </option>';
}
echo '</select>';