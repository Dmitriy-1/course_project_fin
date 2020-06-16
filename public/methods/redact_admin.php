<?php
require_once('connect.php');
require('../../libs/administrator.php');
require('../../libs/orders.php');
require('../../libs/quantity_in_orders.php');
require('../../libs/request.php');
require('../../libs/includes.php');
session_start();
if(array_key_exists('del',$_POST)){

    $admin= new Administrator();
    $admin_id=trim($_POST['id_a']);
    $orders= new Orders();
    $quantitu=new Quantity_in_orders();
    $orders=$orders->set_orders_quant($admin_id);

    foreach ($orders as $item) {
        $quantitu->delete_quant_orders($item[0]);
    }
    $orders1= new Orders();
    $orders1->delete_orders($admin_id);

    $include= new Includes();
    $request= new Request();
    $request=$request->set_request_admin($admin_id);
    $include->delete_includes($request->id_r);
    $request1= new Request();
    $request1->delete_request_request1($admin_id);
    $admin= new Administrator();
    $admin->delete_admin();
}
else{
$admin= new Administrator();
$admin->check_param();
$admin->update_admin();}
header('Location: ../Administrator.php');




