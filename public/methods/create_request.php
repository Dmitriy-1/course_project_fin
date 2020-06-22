<?php
require_once('connect.php');
require('../../libs/request.php');
require('../../libs/account.php');
require('../../libs/services.php');
session_start();

$request= new Request();
$request->check_pole();
$services= new Services();
$services=$services->set_services_req($_POST['list_services']);

$request->create_request($_POST['list_washer'],$services[0][2],$services[0][3],$_POST['date_time_recording']);
header('Location: ../Request.php');




