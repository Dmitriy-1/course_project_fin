<?php
require_once('connect.php');
require('../../libs/orders.php');
require('../../libs/account.php');
require('../../libs/detergents.php');
require('../../libs/quantity_in_orders.php');
session_start();
//print_r('rrr');
$orders= new Orders();
$detergent= new Detergents();
$detergent=$detergent->set_detergents();

for($i = 0; $i < count($detergent); $i++){
    $detergents= new Detergents();
    //print_r($_POST[$i]);
    $detergents=$detergents->set_detergents_order($_POST[$detergent[$i][3]]);
    //print_r($detergents[0][2]);
//print_r('yyyy');
    $orders->order_price+=number_format($detergents[0][2]*$_POST[$i]);
    //print_r($orders);




}

//print_r($orders->order_price);



//print_r($detergent);

$orders->shipping_cost=($orders->order_price*0.15);
//print_r($orders->shipping_cost);
$orders->supplier_price=($orders->order_price+$orders->shipping_cost);
$orders->orders_cont();
$orders->create_orders();
$orders= new Orders();
$orders=$orders->set_orders_id();
//print_r($orders[0][0]);



$detergent= new Detergents();
$detergent=$detergent->set_detergents();
/*print_r('ww');
//print_r($detergent);
print_r('iii');
print_r($_POST[$detergent[1][3]]);
print_r('ttt');*/
for($i = 0; $i < count($detergent); $i++){

    if($_POST[$i]!=0){
        //print_r('eeee');
        $detergents= new Detergents();
        //print_r($_POST[$detergent[1][3]]);
        $detergents=$detergents->set_detergents_order($_POST[$detergent[$i][3]]);
         //print_r($detergents[0][0]);
         //print_r('yyyyyyyyyyyyyyyyyyyyyy');




        $quantity= new Quantity_in_orders();
        $quantity->create_qorders($orders[0][0],$detergents[0][0],$_POST[$i]);
       // print_r('vvvvvvv');

    }
}
//print_r($_POST[6]);
//print_r('qqqq');

header('Location: ../Orders.php');