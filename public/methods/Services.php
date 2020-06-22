<?php
$services= new Services();


$services =$services->set_services();
echo '<div class="message_center">
        <h1 class="text_table">Таблица услуги</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="hidden" name="id_s" id="id_s" value="Ключ услуги" required readonly/>
                <input class="table_title_client" type="text" name="service_name" id="service_name" value="Название услуги" required readonly/>
                <input class="table_title_client" type="text" name="lead_time" id="lead_time" value="Время выполнения" required  readonly/>
                <input class="table_title_client" type="text" name="price_service" id="price_service" value="Цена услуги" required readonly />
                 <input type="submit"  value="Редактировать" class=" b_none "></input>
                 <input type="submit" name="del" id="del" value="Удалить" class="b_none "></input>
            </div>';
echo '<form action="methods/redact_services.php" method="POST">';
foreach ($services as $item) {
    echo '<form action="methods/redact_services.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="hidden" name="id_s" id="id_s" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="service_name" id="service_name" value="' . $item[1] . '" required  />
              <input class="table_title_client" type="time" name="lead_time" id="lead_time" value="' . $item[2] . '" required />
              <input class="table_title_client" type="text" name="price_service" id="price_service" value="' . $item[3] . '" required />
             <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
             <input type="submit" name="del" id="del" value="Удалить" class="button7 "></input>
   </div>';
    echo '</form>';
}


