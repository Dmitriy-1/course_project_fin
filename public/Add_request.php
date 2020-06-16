<?php
require_once('methods/connect.php');
require('../libs/request.php');
require('../libs/account.php');
require('../libs/inquiries_client.php');
require('../libs/services.php');
require('../libs/washer.php');
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
    <div>
    <form action="methods/create_request.php" method="POST" class="regContent" enctype="multipart/form-data">


        <h1 class="text_table">Таблица заявка</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Ключ мойшика</th>
                    <th class="table_list" >Ключ клиента</th>
                    <th class="table_list" >Дата заявки</th>
                    <th class="table_list" >Стоимость заявки</th>
                    <th class="table_list" >Время выполнения</th>

                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="id_w" id="id_w" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="id_k" id="id_k"  required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="date" name="date_time_recording" id="date_time_recording" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="full_procedure_request" id="full_procedure_request" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="time" name="application_lead_time" id="application_lead_time" required />
                    </td>


                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>
    </div>
    <div class="message_center" >
        <?php include('methods/Client.php') ?>
    </div>
    <div class="message_center" >
        <?php include('methods/Washer.php') ?>
    </div>
    <div class="message_center" >
        <?php include('methods/Services.php') ?>
    </div>

</section>
</body>
</html>



