<?php
require_once('connect.php');
require('../../libs/includes.php');
require('../../libs/account.php');
session_start();

$includes= new Includes();
$includes->include_cont();
$includes->create_include();

header('Location: ../Include.php');