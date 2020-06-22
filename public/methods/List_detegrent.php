<?php
require_once('connect.php');
session_start();

$detergent=new Detergents();
$detergent=$detergent->set_detergents();
//print_r($detergent[0][1]);
echo '<div class="list_detegrents">
';
echo '</select>';
echo '
    <table class="list_det_orders">
<tr>
   
 <th> <input class="table_title_deter" type="text" name="id_m" id="id_m" value="Название средства" required readonly />
               </th>
 <th> <input class="table_title_deter" type="text" name="id_m" id="id_m" value="Количество средства" required readonly />
               </th>
</tr>
';
for ($i = 0; $i < count($detergent); $i++){
    echo '
<tr>
<th> 
<input class="table_title_deter" type="text" name="' . $detergent[$i][3]. '" id="' . $detergent[$i][3]. '" value="' . $detergent[$i][1]. '" required readonly />
               </th>
<th> <input class="table_title_deter" type="number" name="'.$i.'" id="'.$i.'" required />
                        </th>
</tr>    
    ';
}
echo '</table>
';