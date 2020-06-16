<?php
$request=new Request();
$request=$request->set_request();
echo '

    <div class="message_center">
        <h1 class="text_table">Таблица заявки</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_req" type="text" name="id_r" id="id_r" value="Ключ заказа" required readonly />
                <input class="table_title_req" type="text" name="id_a" id="id_a" value="Ключ администратора" required  readonly/>
                <input class="table_title_req" type="text" name="id_m" id="id_m" value="Ключ мойки" required readonly />
                <input class="table_title_req" type="text" name="id_w" id="id_w" value="Ключ мойщика" required readonly/>
                <input class="table_title_req" type="text" name="id_k" id="id_k" value="Ключ клиента" required readonly/>
                <input class="table_title_req" type="text" name="date_time_recording" id="date_time_recording" value="Дата заявки" required readonly/>
                <input class="table_title_req" type="text" name="full_procedure_request" id="full_procedure_request" value="Стоимость процедур" required readonly/>
                <input class="table_title_req" type="text" name="application_lead_time" id="application_lead_time" value="Время выполнения" required readonly/>
                <input class="table_title_req" type="text" name="status_request" id="status_request" value="Статус заявки" required readonly/>

                <input type="submit"  value="Редактировать" class=" b_none "></input>
                 <input type="submit" name="del" id="del" value="Удалить" class="b_none "></input>
            </div>
           

        </div>
        
    </div>


';



echo '<form action="methods/redact_request.php" method="POST">';
foreach ($request as $item) {
    echo '<form action="methods/redact_request.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_req" type="text" name="id_r" id="id_r" value="' . $item[0] . '" required readonly />
              <input class="table_title_req" type="text" name="id_a" id="id_a" value="' . $item[1] . '" required readonly/>
              <input class="table_title_req" type="text" name="id_m" id="id_m" value="' . $item[2] . '" required  readonly/>
              <input class="table_title_req" type="text" name="id_w" id="id_w" value="' . $item[3] . '" required />
              <input class="table_title_req" type="text" name="id_k" id="id_k" value="' . $item[4] . '" required  readonly/>
              <input class="table_title_req" type="date" name="date_time_recording" id="date_time_recording" value="' . $item[5] . '" required />
              <input class="table_title_req" type="text" name="full_procedure_request" id="full_procedure_request" value="' . $item[6] . '" required />
              <input class="table_title_req" type="time" name="application_lead_time" id="application_lead_time" value="' . $item[7] . '" required />
              <input class="table_title_req" type="text" name="status_request" id="status_request" value="' . $item[8] . '" required />
             <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
             <input type="submit" name="del" id="del" value="Удалить" class="button7 "></input>
             
   </div>';
    echo '</form>
        
';
}
/*echo '<div class="btn_add">
            <button class="button7"><a class="btn_href"  href="Add_request.php">Добавить</a>  </button>
        </div>';*/



