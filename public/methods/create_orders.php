<?php
require_once('connect.php');
require('../../libs/orders.php');
require('../../libs/account.php');
session_start();

$orders= new Orders();
$orders->orders_cont();
$orders->create_orders();

header('Location: ../Orders.php');