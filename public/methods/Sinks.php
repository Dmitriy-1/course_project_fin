<?php
if ($_SESSION['user']->director == 1) {

    $sinks= new Sinks();
    $sinks=$sinks->set_fullsinks();
    echo '<div class="message_center">
        <h1 class="text_table">Таблица мойка</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="washing_address" id="washing_address" value="Адрес мойки" required  readonly/>
                <input class="table_title_client" type="text" name="$service_list" id="$service_list" value="Услуги мойки" required readonly />
                <input class="table_title_client" type="text" name="washing_contact" id="washing_contact" value="Телефон мойки" required readonly/>
                <input type="submit"  value="Редактировать" class=" b_none "></input>
            </div>
        ';
    echo '<form action="methods/redact_sinks.php" method="POST">';
    foreach ($sinks as $item) {

        echo '<form action="methods/redact_sinks.php" method="POST">';
        echo '
   <div class="form_table">   
              <input class="table_title_client" type="text" name="washing_address" id="washing_address" value="' . $item[1]. '" required  />
              <input class="table_title_client" type="text" name="service_list" id="service_list" value="' . $item[2] . '"  />
              <input class="table_title_client" type="text" name="washing_contact" id="washing_contact" value="' . $item[3]. '"  />
              <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
              </div>
              ';
        echo '</form>
        </div>       
    </div>';
    }


}


else {

    $sinks = new Sinks();
    $sinks = $sinks->set_sinks();
    echo '<div class="message_center">
        <h1 class="text_table">Таблица мойка</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="washing_address" id="washing_address" value="Адрес мойки" required  readonly/>
                <input class="table_title_client" type="text" name="service_list" id="service_list" value="Услуги мойки" required readonly />
                <input class="table_title_client" type="text" name="washing_contact" id="washing_contact" value="Телефон мойки" required readonly/>
                <input type="submit"  value="Редактировать" class=" b_none "></input>
            </div>
        ';

    echo '<form action="methods/redact_sinks.php" method="POST">';

    echo '<form action="methods/redact_sinks.php" method="POST">';
    echo '
   <div class="form_table">   
              <input class="table_title_client" type="text" name="washing_address" id="washing_address" value="' . $sinks[0][1] . '" required readonly />
              <input class="table_title_client" type="text" name="service_list" id="service_list" value="' . $sinks[0][2] . '"  />
              <input class="table_title_client" type="text" name="washing_contact" id="washing_contact" value="' . $sinks[0][3] . '"  />
              <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
              </div>
              ';
    echo '</form>
        </div>       
    </div>';

}


