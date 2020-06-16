<?php
if($_SESSION['user']->director==1){
    $admin= new Administrator();
    $admin=$admin->set_fulladmin();

echo '<div class="message_center">
        <h1 class="text_table">Таблица администраторов</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="id_a" id="id_a" value="Код администратора" required  />
                <input class="table_title_client" type="text" name="id_m" id="id_m" value="Номер мойки" required  />
                <input class="table_title_client" type="text" name="surname_a" id="surname_a" value="Фамилия " required readonly />
                <input class="table_title_client" type="text" name="name_administrator" id="name_administrator" value="Имя " required readonly/>
                <input class="table_title_client" type="text" name="patronymic_a" id="patronymic_a" value="Отчество " required readonly/>
                <input class="table_title_client" type="text" name="salary_a" id="salary_a" value="зарплата" required readonly/>
                <input type="submit"  value="Редактировать" class=" b_none "></input>
                <input type="submit" name="del" id="del" value="Удалить" class="b_none "></input>
            </div>';

    echo '<form action="methods/redact_admin.php" method="POST">';
        foreach ($admin as $item) {
            echo '<form action="methods/redact_admin.php" method="POST">';
            echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="id_a" id="id_a" value="' . $item[0] . '" required readonly />
              <input class="table_title_client" type="text" name="id_m" id="id_m" value="' . $item[1] . '" required readonly />
              <input class="table_title_client" type="text" name="surname_a" id="surname_a" value="' . $item[3] . '" required  />
              <input class="table_title_client" type="text" name="name_administrator" id="name_administrator" value="' . $item[2] . '" required  />
              <input class="table_title_client" type="text" name="patronymic_a" id="patronymic_a" value="' . $item[4] . '" required  />
              <input class="table_title_client" type="text" name="salary_a" id="salary_a" value="' . $item[5] . '" required  />
              <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>
              <input type="submit" name="del" id="del" value="Удалить" class="button7 "></input>
              </div>
              ';
            echo '</form>';
        }



}
else{
$admin= new Administrator();
$admin=$admin->set_admin();
echo '<div class="message_center">
        <h1 class="text_table">Таблица администраторов</h1>
        <div class="table_stile">
            <div class="form_table">
                <input class="table_title_client" type="text" name="id_m" id="id_m" value="Номер мойки" required  readonly/>
                <input class="table_title_client" type="text" name="surname_a" id="surname_a" value="Фамилия " required readonly />
                <input class="table_title_client" type="text" name="name_administrator" id="name_administrator" value="Имя " required readonly/>
                <input class="table_title_client" type="text" name="patronymic_a" id="patronymic_a" value="Отчество " required readonly/>
                <input class="table_title_client" type="text" name="salary_a" id="salary_a" value="зарплата" required readonly/>
               <!-- <input type="submit"  value="Редактировать" class=" b_none "></input>-->
            </div>';
    echo '<form action="#" method="POST">';
    echo '
   <div class="form_table">
              <input class="table_title_client" type="text" name="id_K" id="id_K" value="' . $admin->id_m . '" required readonly />
              <input class="table_title_client" type="text" name="phone_number" id="phone_number" value="' . $admin->surname_a. '" required readonly />
              <input class="table_title_client" type="text" name="surname_client" id="surname_client" value="' . $admin->name_administrator . '" required readonly />
              <input class="table_title_client" type="text" name="name_client" id="name_client" value="' . $admin->patronymic_a . '" required readonly />
              <input class="table_title_client" type="text" name="patronymic_k" id="patronymic_k" value="' . $admin->salary_a . '" required readonly />
             <!-- <input type="submit" name="Ok" value="Редактировать" class="button7 "></input>-->
              </div>
              ';
    echo '</form>';
/*}*/}


