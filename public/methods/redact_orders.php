<?php
require_once('connect.php');
require('../../libs/orders.php');
require('../../libs/account.php');
session_start();

$orders = new Orders();
try {
    $orders->check_param();
    $orders->update_orders();
    header('Location: ../Orders.php');
} catch (Exception $e) {
}

