<?php
require_once('connect.php');
require('../../libs/request.php');
require('../../libs/includes.php');
session_start();

if(array_key_exists('del',$_POST)){
    $include= new Includes();
    $request =new Request();
    $request->id_r=trim($_POST['id_r']);
    $request_id =new Request();
    $include= new Includes();
    $include->delete_includes($request->id_r);
    foreach ($request as $item) {
        $include->delete_includes($item[0]);
    }
    $request->delete_request_request();
}
else {
    $request = new Request();
    try {
        $request->check_param();
        $request->update_request();
    } catch (Exception $e) {
    }
}
header('Location: ../Request.php');
