<?php
$detergents= new Detergents();
$detergents =$detergents->set_detergents();
echo ' <div class="message_center">
        <h1 class="text_table">Таблица моющие средства</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="hidden" name="detergent_code" id="detergent_code  " value="Код средства" required readonly/>
                <input class="table_title_client" type="text" name="name_funds" id="name_funds" value="Название средства" required readonly/>
                <input class="table_title_client" type="text" name="price_funds" id="price_funds" value="цена средства" required  readonly/>
            </div>';
echo '<form action="methods/redact_orders.php" method="POST">';
foreach ($detergents as $item) {
    echo '<form action="methods/redact_orders.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="hidden" name="detergent_code" id="detergent_code" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="name_funds" id="name_funds" value="' . $item[1] . '" required readonly />
              <input class="table_title_client" type="text" name="price_funds" id="price_funds" value="' . $item[2] . '" required readonly/>
            <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
   </div>';
    echo '</form>';
}


