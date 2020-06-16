<?php
require_once('methods/connect.php');
require('../libs/account.php');
require('../libs/includes.php');
require('../libs/services.php');
require('../libs/request.php');
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
    <form action="methods/create_include.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица включает</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Ключ услуги</th>
                    <th class="table_list" >Ключ заявки</th>

                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="id_s" id="id_s" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="id_r" id="id_r" required />
                    </td>



                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>

    <?php include('methods/Services.php') ?>

    <?php include('methods/Request.php') ?>
</section>
</body>
</html>



