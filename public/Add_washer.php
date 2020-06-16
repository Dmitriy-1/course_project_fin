<?php
require('../libs/inquiries_client.php');
require('../libs/account.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Авторизация и регистрация</title>-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(img/background.png)">
<header class="header">
    <div class="header__wrapper">
        <?php include('methods/Header.php') ?>
    </div>
</header>
<section>
    <form action="methods/create_washer.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица клиент</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Фамилия мойщика</th>
                    <th class="table_list" >Имя мойщика</th>
                    <th class="table_list" >Отчество мойщика</th>
                    <th class="table_list" >Средства для мойки</th>
                    <th class="table_list" >Зарплата</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="surname_w" id="surname_w" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="name_w" id="name_w" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="patronymic_w" id="patronymic_w" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="detergents" id="detergents" required />
                    </td>
                    <td class="table_list">
                    <input class="table_title_theme" type="text" name="salary_w" id="salary_w" required />
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>
</section>
</body>
</html>



