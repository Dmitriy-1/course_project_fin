<?php
require_once('methods/connect.php');
require('../libs/quantity_in_orders.php');
require('../libs/account.php');
require('../libs/orders.php');
require('../libs/detergents.php');
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
    <form action="methods/create_quantity_in_orders.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица количество в заказе</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Номер заказа</th>
                    <th class="table_list" >Код средства</th>
                    <th class="table_list" >Количество средства</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="order_number" id="order_number" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="detergent_code" id="detergent_code" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="order_quantity" id="order_quantity" required />
                    </td>


                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>

    <?php include('methods/Orders.php') ?>

    <?php include('methods/Detergents.php') ?>
</section>
</body>
</html>



