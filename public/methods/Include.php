<?php
$includes= new Includes();

$includes =$includes->set_include();
echo '<div class="message_center">
        <h1 class="text_table">Таблица включает</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="id_s" id="id_s  " value="Ключ услуги" required readonly/>
                <input class="table_title_client" type="text" name="id_r" id="id_r" value="Ключ заявки" required readonly/>
            </div>';
echo '<form action="methods/redact_orders.php" method="POST">';
foreach ($includes as $item) {
    echo '<form action="methods/redact_orders.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="id_s" id="id_s" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="id_к" id="id_к" value="' . $item[1] . '" required readonly />
             <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
   </div>';
    echo '</form>';
}


