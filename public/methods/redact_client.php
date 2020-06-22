<?php
require_once('connect.php');
require('../../libs/inquiries_client.php');
require('../../libs/request.php');
require('../../libs/includes.php');

session_start();
if(array_key_exists('del',$_POST)){
    $request =new Request();
    $request_id =new Request();
    $request_id->id_k=trim($_POST['id_K']);
    $request=$request->set_request_c($request_id->id_k);
    $include= new Includes();
    foreach ($request as $item) {
        $include->delete_includes($item[0]);
    }
    $request1 =new Request();
    $request1->delete_request($request_id->id_k);
    $client = new Inquiries();
    $client->delete_client();
    header('Location: ../Client.php');
}
if(array_key_exists('req',$_POST)){
    $client = new Inquiries();
    $client->id_k=trim($_POST['id_K']);
    $_SESSION['client'] = $client->id_k;
    header('Location: ../Add_request.php');
}
else{
try {
    $client = new Inquiries();
    $client->check_param();
    $client->update_client();
    $_SESSION['client']=$client;
} catch (Exception $e) {
}
    header('Location: ../Client.php');
}

