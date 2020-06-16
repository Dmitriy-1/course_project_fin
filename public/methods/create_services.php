<?php
require_once('connect.php');
require('../../libs/services.php');
require('../../libs/account.php');
session_start();

$services= new Services();
$services->services_cont();
$services->create_services();

header('Location: ../Services.php');