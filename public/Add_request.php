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
        <h1 class="text_table">создание заявки</h1>
        <div >
            <table class="table_stile_table">
                <tr>
                    <th class="table_list_req" >Услуга</th>
                    <th class="table_list_req" >Мойщик</th>
                    <th class="table_list_req" >Дата заявки</th>
                </tr>
                <tr>
                    <td>
                        <?php include('methods/add_services_to_request.php');?>
                    </td>
                    <td>

                        <?php include('methods/add_washer_to_request.php');?>
                    </td>
                    <td>
                        <input class="table_title_theme_date" type="date" name="date_time_recording" id="date_time_recording" required />

                    </td>
                </tr>
            </table>
            <?php
            if(isset($_SESSION['message'])){
                echo'<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
        </div>
        <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
    </form>
    </div>
</section>
</body>
</html>



