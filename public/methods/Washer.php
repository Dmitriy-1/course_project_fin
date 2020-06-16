<?php
$washer=new Washer();
$washer=$washer->set_washers();
echo '<div class="message_center">
        <h1 class="text_table">Таблица мойщики</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="id_w" id="id_w" value="Ключ мойщика" required readonly/>
                <input class="table_title_client" type="text" name="surname_w" id="surname_w" value="Фамилия" required  readonly/>
                <input class="table_title_client" type="text" name="name_w" id="name_w" value="Имя" required readonly />
                <input class="table_title_client" type="text" name="patronymic_w" id="patronymic_w" value="Отчество" required readonly/>
                <input class="table_title_client" type="text" name="detergents" id="detergents" value="Средства для мойки" required readonly/>
                <input class="table_title_client" type="text" name="salary_w" id="salary_w" value="Зарплата" required readonly/>

                <input type="submit"  value="Редактировать" class=" b_none "></input>
            </div>
           
        ';
echo '<form action="methods/redact_washer.php" method="POST">';
foreach ($washer as $item) {
    echo '<form action="methods/redact_washer.php" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="id_w" id="id_w" value="' . $item[0] . '" required readonly />
               <input class="table_title_client" type="text" name="surname_w" id="surname_w" value="' . $item[4] . '" required />
              <input class="table_title_client" type="text" name="name_w" id="name_w" value="' . $item[2] . '" required />
              <input class="table_title_client" type="text" name="patronymic_w" id="patronymic_w" value="' . $item[5] . '" required />
              <input class="table_title_client" type="text" name="detergents" id="detergents" value="' . $item[3] . '" required />
              <input class="table_title_client" type="text" name="salary_w" id="salary_w" value="' . $item[6] . '" required />
             <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
   </div>';
    echo '</form>';
}
echo '
</div>       
';


