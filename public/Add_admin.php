<?php
require('../libs/administrator.php');
require('../libs/account.php');
require('../libs/sinks.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(img/background.png)">
<header class="header">
    <div class="header__wrapper">
        <?php include('methods/Header.php') ?>
    </div>
</header>
<section>
    <form action="methods/create_admin.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица администратор</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>


                    <th class="table_list" >Адресс мойки</th>
                    <th class="table_list" >Фамилия </th>
                    <th class="table_list" >Имя </th>
                    <th class="table_list" >Отчество </th>
                    <th class="table_list" >Зарплата </th>
                    <th class="table_list" >login </th>
                    <th class="table_list" >password </th>

                </tr>
                <tr>

                    <td class="table_list">
                        <?php include('methods/add_address_admin.php') ?>
                        <!--<input class="table_title_theme" type="text" name="id_m" id="id_m" required />
                   --> </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="surname_a" id="surname_a" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="name_administrator" id="name_administrator" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="patronymic_a" id="patronymic_a" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="salary_a" id="salary_a" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="login" id="login" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="password" id="password" required />
                    </td>

                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>
</section>
</body>
</html>



