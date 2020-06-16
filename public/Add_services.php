<?php
require('../libs/services.php');
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
    <form action="methods/create_services.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица услуги</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Название услуги</th>
                    <th class="table_list" >Время выполнения</th>
                    <th class="table_list" >Цена услуги</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="service_name" id="service_name" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="lead_time" id="lead_time" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="price_service" id="price_service" required />
                    </td>

                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>
</section>
</body>
</html>



