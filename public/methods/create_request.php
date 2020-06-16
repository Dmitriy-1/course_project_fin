<?php
require_once('connect.php');
require('../../libs/request.php');
require('../../libs/account.php');
session_start();

$request= new Request();
$request->request_cont();
$request->create_request();

header('Location: ../Request.php');




