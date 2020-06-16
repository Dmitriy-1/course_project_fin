<?php
require_once('connect.php');
require('../../libs/quantity_in_orders.php');
require('../../libs/account.php');
session_start();

$orders= new Quantity_in_orders();
$orders->qorders_cont();
$orders->create_qorders();

header('Location: ../Quantity_in_orders.php');