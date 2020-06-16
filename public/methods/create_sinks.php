<?php
require_once('connect.php');
require('../../libs/sinks.php');
require('../../libs/account.php');
session_start();

$sinks= new Sinks();
$sinks->sinks_cont();
$sinks->create_sinks();

header('Location: ../Sinks.php');