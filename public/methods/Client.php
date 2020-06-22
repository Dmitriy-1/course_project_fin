<?php
$client= new Inquiries();
$client=$client->set_client();
echo ' <h1 class="text_table">Таблица клиент</h1>
                    <div class="table_stile">
                        <div class="form_table">
                          <!--  <input class="table_title_client" type="text" name="id_K" id="id_K" value="Ключ" required readonly />-->
                            <input class="table_title_client" type="text" name="phone_number" id="phone_number" value="Телефон клиента" required  readonly/>
                            <input class="table_title_client" type="text" name="surname_client" id="surname_client" value="Фамилия клиента" required readonly />
                            <input class="table_title_client" type="text" name="name_client" id="name_client" value="Имя клиента" required readonly/>
                            <input class="table_title_client" type="text" name="patronymic_k" id="patronymic_k" value="Отчество клиента" required readonly/>
                            <input type="submit"  value="Редактировать" class=" b_none "></input>
                             <input type="submit" name="del" id="del" value="Удалить" class="b_none "></input>
                             <input type="submit" name="req" id="req" value="Создать заявку" class="b_none "></input>
                        </div>
                       
                    </div>';


    echo '<form action="methods/redact_client.php" method="POST">';
    foreach ($client as $item) {
        echo '<form action="methods/redact_client.php" method="POST">';
        echo '
   <div class="form_table">
              <input class="table_title_client" type="hidden" name="id_K" id="id_K" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="phone_number" id="phone_number" value="' . $item[1] . '" required />
              <input class="table_title_client" type="text" name="surname_client" id="surname_client" value="' . $item[3] . '" required />
              <input class="table_title_client" type="text" name="name_client" id="name_client" value="' . $item[2] . '" required />
              <input class="table_title_client" type="text" name="patronymic_k" id="patronymic_k" value="' . $item[4] . '" required />
              <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
              <input type="submit" name="del" id="del" value="Удалить" class="button7 "></input>
              <input type="submit" name="req" id="req" value="Создать заявку" class="button7 "></input>
              </div>
              ';
        echo '</form>';
    }


