<?php
require_once('methods/connect.php');
require('../libs/orders.php');
require('../libs/account.php');
require('../libs/provider.php');
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
    <form action="methods/create_orders.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица заказ</h1>
        <div class="table_stile_add"  >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Название компании</th>
                    <th class="table_list" >Дата заказа</th>
                    <th class="table_list" >Цена заказа</th>
                    <th class="table_list" >Цена доставки</th>
                    <th class="table_list" >Цена поставщика</th>
                    <th class="table_list" >Текст заказа</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="name_company" id="name_company" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="date" name="order_date" id="order_date" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="order_price" id="order_price" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="shipping_cost" id="shipping_cost" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="supplier_price" id="supplier_price" required />
                    </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="text" name="text_order" id="text_order" required />
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>

    <?php include('methods/Provider.php') ?>
</section>
</body>
</html>



