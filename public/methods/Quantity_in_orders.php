<?php
$orders= new Quantity_in_orders();
$orders =$orders->set_orders();
echo ' <div class="message_center">
        <h1 class="text_table">Таблица содержание в заказе</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="order_number" id="order_number" value="Номер заказа" required readonly/>
                <input class="table_title_client" type="text" name="detergent_code" id="detergent_code" value="Код средства" required readonly/>
                <input class="table_title_client" type="text" name="order_quantity" id="order_quantity" value="Количество средства" required  readonly/>


            </div>';
echo '<form action="methods/redact_orders.php" method="POST">';
foreach ($orders as $item) {
    echo '<form action="methods/redact_orders.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="order_number" id="order_number" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="detergent_code" id="detergent_code" value="' . $item[1] . '" required readonly />
              <input class="table_title_client" type="text" name="order_quantity" id="order_quantity" value="' . $item[2] . '" required readonly/>
   </div>';
    echo '</form>';
}


