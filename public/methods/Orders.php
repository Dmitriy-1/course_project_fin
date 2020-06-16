<?php
if($_SESSION['user']->director==1){

    $orders= new Orders();
    $orders =$orders->set_fullorders();
    echo ' <div class="message_center">
        <h1 class="text_table">Таблица заказы</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="order_number" id="order_number" value="Номер заказа" required readonly/>
                <input class="table_title_client" type="text" name="name_company" id="name_company" value="Название компании" required readonly/>
                <input class="table_title_client" type="text" name="order_date" id="order_date" value="Дата заказа" required  readonly/>
                <input class="table_title_client" type="text" name="order_price" id="order_price" value="Цена заказа" required readonly />
                <input class="table_title_client" type="text" name="shipping_cost" id="shipping_cost" value="Цена доставки" required readonly/>
                <input class="table_title_client" type="text" name="supplier_price" id="supplier_price" value="Цена поставщика" required readonly/>
                <input class="table_title_client" type="text" name="text_order" id="text_order" value="Текст заказа" required readonly/>

            </div>';
    echo '<form action="methods/redact_orders.php" method="POST">';
    foreach ($orders as $item) {
        echo '<form action="methods/redact_orders.php" method="POST">';
        echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="order_number" id="order_number" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="name_company" id="name_company" value="' . $item[2] . '" required readonly />
              <input class="table_title_client" type="text" name="order_date" id="order_date" value="' . $item[3] . '" required readonly/>
              <input class="table_title_client" type="text" name="order_price" id="order_price" value="' . $item[4] . '" required readonly/>
              <input class="table_title_client" type="text" name="shipping_cost" id="shipping_cost" value="' . $item[5] . '" required readonly/>
              <input class="table_title_client" type="text" name="supplier_price" id="supplier_price" value="' . $item[6] . '" required readonly/>
              <input class="table_title_client" type="text" name="text_order" id="text_order" value="' . $item[7] . '" required readonly />
            <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
   </div>';
        echo '</form>';
    }
}
else{

    $orders= new Orders();
    $orders =$orders->set_orders();
    echo ' <div class="message_center">
        <h1 class="text_table">Таблица заказы</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="order_number" id="order_number" value="Номер заказа" required readonly/>
                <input class="table_title_client" type="text" name="name_company" id="name_company" value="Название компании" required readonly/>
                <input class="table_title_client" type="text" name="order_date" id="order_date" value="Дата заказа" required  readonly/>
                <input class="table_title_client" type="text" name="order_price" id="order_price" value="Цена заказа" required readonly />
                <input class="table_title_client" type="text" name="shipping_cost" id="shipping_cost" value="Цена доставки" required readonly/>
                <input class="table_title_client" type="text" name="supplier_price" id="supplier_price" value="Цена поставщика" required readonly/>
                <input class="table_title_client" type="text" name="text_order" id="text_order" value="Текст заказа" required readonly/>

            </div>';
    echo '<form action="methods/redact_orders.php" method="POST">';
    foreach ($orders as $item) {
        echo '<form action="methods/redact_orders.php" method="POST">';
        echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="order_number" id="order_number" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="name_company" id="name_company" value="' . $item[2] . '" required readonly />
              <input class="table_title_client" type="date" name="order_date" id="order_date" value="' . $item[3] . '" required readonly/>
              <input class="table_title_client" type="text" name="order_price" id="order_price" value="' . $item[4] . '" required readonly/>
              <input class="table_title_client" type="text" name="shipping_cost" id="shipping_cost" value="' . $item[5] . '" required readonly/>
              <input class="table_title_client" type="text" name="supplier_price" id="supplier_price" value="' . $item[6] . '" required readonly/>
              <input class="table_title_client" type="text" name="text_order" id="text_order" value="' . $item[7] . '" required readonly />
            <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
   </div>';
        echo '</form>';
    }
}




