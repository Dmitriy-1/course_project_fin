<?php
require_once('methods/connect.php');
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
    <form action="methods/create_sinks.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица мойки</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Адрес мойки</th>
                    <th class="table_list" >Услуги мойки</th>
                    <th class="table_list" >Телефон мойки</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="washing_address" id="washing_address" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="service_list" id="service_list" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="washing_contacts" id="washing_contacts" required />
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>


</section>
</body>
</html>



