<?php
require_once('connect.php');
require('../../libs/washer.php');
require('../../libs/account.php');
session_start();
$washer= new Washer();
$washer->washer_cont();

$washer->create_washer();
header('Location: ../Washer.php');




