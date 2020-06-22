<?php

$request=new Request();
$request=$request->set_request();
$stat = array(
    "0" => "В работе",
    "1" => "Принята",
    "2" => "Выполнена",
);

echo '

    <div class="message_center">
        <h1 class="text_table">Таблица заявки</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_req" type="text" name="id_m" id="id_m" value="Адрес мойки" required readonly />
                <input class="table_title_req" type="text" name="id_w" id="id_w" value="ФИО мойщика" required readonly/>
                <input class="table_title_req" type="text" name="id_k" id="id_k" value="ФИО клиента" required readonly/>
                <input class="table_title_req" type="text" name="date_time_recording" id="date_time_recording" value="Дата заявки" required readonly/>
                <input class="table_title_req" type="text" name="full_procedure_request" id="full_procedure_request" value="Стоимость процедур" required readonly/>
                <input class="table_title_req" type="text" name="application_lead_time" id="application_lead_time" value="Время выполнения" required readonly/>
                <input class="table_title_req" type="text" name="name_services" id="name_services" value="Название услуги" required readonly/>
                <input class="table_title_req" type="text" name="status_request" id="status_request" value="Статус заявки" required readonly/>

                <input type="submit"  value="Редактировать" class=" b_none "></input>
                 <input type="submit" name="del" id="del" value="Удалить" class="b_none "></input>
            </div>
           

        </div>
        
    </div>


';



echo '<form action="methods/redact_request.php" method="POST">';
foreach ($request as $item) {
    $client = new Inquiries();
    $client=$client->set_client_req($item[4]);
    $washer= new Washer();
    $washer=$washer->set_washers_req($item[3] );
    $wash= new Washer();
    $wash=$wash->set_washers();
    $sink= new Sinks();
    $sink=$sink->set_sinks_req($item[2]);
    $services=new Services();
    $services=$services->set_services_request($item[7]);



    echo '<form action="methods/redact_request.php" method="POST">';
    echo '
   <div class="form_table">
            <input class="table_title_req" type="hidden" name="id_r" id="id_r" value="' . $item[0] . '" required  readonly/>
              
              <input class="table_title_req" type="text" name="id_m" id="id_m" value="' . $sink[0][1] . '" required  readonly/>
               <select style="width: 140px" name="list_washer">';

    foreach ($wash as $items) {
        if($items[0]==$washer[0][0]) {
            echo '<option selected   value="' . $washer[0][0] . '" >'.$washer[0][4].' '.$washer[0][2].' '.$washer[0][5].'</option>';

        }elseif($items[0]!=$washer[0][0])
        {
            echo '<option   value="' . $items[0] . '" >' . $items[4] . '  ' . $items[2] . ' ' . $items[5] . '</option>';
        }}echo '</select>

 
               <input class="table_title_req" type="text" name="id_k" id="id_k" value="' . $client[0][3] .' ' . $client[0][2] .' ' . $client[0][4] .' " required  readonly/>
              <input class="table_title_req" type="date" name="date_time_recording" id="date_time_recording" value="' . $item[5] . '" required />
              <input class="table_title_req" type="text" name="full_procedure_request" id="full_procedure_request" value="' . $item[6] . '" required readonly />
              <input class="table_title_req" type="time" name="application_lead_time" id="application_lead_time" value="' . $item[7] . '" required  readonly/>
             <input class="table_title_req" type="text" name="name_services" id="name_services" value="' . $services[0][1] . '" required  readonly/>
            <select style="width: 140px"  name="list_status" >
             ';



        if (strcmp($item[8], $stat[0]) == 0) {
            echo '
                    <option selected value="'.$stat[0].'">' . $stat[0] . '</option>
                    <option value="' . $stat[1] . '">' . $stat[1] . '</option>
                    <option value="' . $stat[2] . ' ">' . $stat[2] . '</option>';
        } elseif (strcmp($item[8], $stat[1]) == 0) {
            echo '
                    <option selected value="' . $stat[1] . '">' . $stat[1] . '</option>
                    <option value="' . $stat[0] . '">' . $stat[0] . '</option>
                    <option value="' . $stat[2] . '">' . $stat[2] . '</option>';
        } elseif (strcmp($item[8], $stat[2]) == 0) {
            echo '
                    <option selected value="' . $stat[2] . '">' . $stat[2] . '</option>
                    <option value=" ' . $stat[0] . ' ">' . $stat[0] . '</option>
                    <option value="' . $stat[1] . '">' . $stat[1] . '</option>';
        }

   echo '
</select>';
    echo '
             <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
             <input type="submit" name="del" id="del" value="Удалить" class="button7 "></input>
             
   </div>';
    echo '</form>
        
';
}
/*<input class="table_title_req" type="text" name="id_w" id="id_w" value="'.$washer[0][4].' '.$washer[0][2].' '.$washer[0][5].'" required />*/
