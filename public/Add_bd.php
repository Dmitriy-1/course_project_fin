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
            <form action="methods/create_client.php" method="POST" class="regContent" enctype="multipart/form-data">
                <h1 class="text_table">Таблица клиент</h1>
                <div class="table_stile_add"  >
                    <table class="table_stile_table">
                        <tr>
                            <th class="table_list" >Номер телефона</th>
                            <th class="table_list" >Фамилия клиента</th>
                            <th class="table_list" >Имя клиента</th>
                            <th class="table_list" >Отчество клиента</th>
                        </tr>
                        <tr>
                            <td class="table_list">
                                <input class="table_title_theme" type="text" name="phone_number" id="phone_number" required />
                            </td>
                            <td class="table_list">
                                <input class="table_title_theme" type="text" name="surname_k" id="surname_k" required />
                            </td>
                            <td class="table_list">
                                <input class="table_title_theme" type="text" name="name_k" id="name_k" required />
                            </td>
                            <td class="table_list">
                                <input class="table_title_theme" type="text" name="patronymic_k" id="patronymic_k" required />
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
            </form>
        </section>
    </body>
</html>



