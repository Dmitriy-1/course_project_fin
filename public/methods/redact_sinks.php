<?php
require_once('connect.php');
require('../../libs/sinks.php');
require('../../libs/account.php');
session_start();

$sinks= new Sinks();

$sinks->sinks_cont();
$sinks->set_sinks();
$sinks_id= $sinks->id_m;
//print_r($sinks_id);
//print_r('www');
$sinks->update_sinks();

header('Location: ../Sinks.php');




