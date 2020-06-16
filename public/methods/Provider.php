<?php
$provider= new  Provider();
$provider =$provider->set_provider();
echo ' <div class="message_center">
        <h1 class="text_table">Таблица поставщики</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="name_company" id="name_company" value="Название компании" required readonly/>
                <input class="table_title_client" type="text" name="supplier_contacts" id="supplier_contacts" value="контакты" required readonly/>

                
            </div>';
echo '<form action="methods/redact_orders.php" method="POST">';
foreach ($provider as $item) {
    echo '<form action="methods/redact_orders.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="name_company" id="name_company" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="supplier_contacts" id="supplier_contacts" value="' . $item[1] . '" required readonly />
             <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
   </div>';
    echo '</form>';
}


