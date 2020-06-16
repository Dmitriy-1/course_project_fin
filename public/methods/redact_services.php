<?php
require_once('connect.php');
require('../../libs/services.php');
require('../../libs/account.php');
require('../../libs/includes.php');
session_start();


if(array_key_exists('del',$_POST)){
    $services_ids = new Services();
    $services_ids= trim($_POST['id_s']);
    $include= new Includes();
    $include->delete_includes_services($services_ids);
    $services1 = new Services();
    $services1 ->delete_services();
}
else {
    $services = new Services();
    try {
        $services->check_param();
        $services->update_services();
    } catch (Exception $e) {
    }
}
header('Location: ../Services.php');
