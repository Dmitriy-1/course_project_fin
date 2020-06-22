<?php
require_once('connect.php');
require('../../libs/request.php');
require('../../libs/includes.php');
require('../../libs/sinks.php');
require('../../libs/washer.php');
require('../../libs/services.php');
session_start();
try {
    $stat = array(
        "0" => "В работе",
        "1" => "Принята",
        "2" => "Выполнена",
    );
    if (array_key_exists('del', $_POST)) {
        $include = new Includes();
        $request = new Request();
        $request->id_r = trim($_POST['id_r']);
        $request_id = new Request();
        $include = new Includes();
        $include->delete_includes($request->id_r);
        foreach ($request as $item) {
            $include->delete_includes($item[0]);
        }
        $request->delete_request_request();
    } else {
        $request = new Request();
        try {
           // print_r('www');

    //$sinks= new Sinks();
          //  $sinks=$sinks->set_sinks_redact($_POST['id_m']);
            $washer=new Washer();

            //print_r($_POST['id_r']);
           // print_r($_POST['name_services']);

            // print_r('tttt');
            $request->check_param();
            $request->update_request();

            if(strcmp( $_POST['list_status'], $stat[0]) == 0)
            {
                $serv= new Services();
                $serv=$serv->set_services_request_name($_POST['name_services']);

               // print_r($serv[0][0]);
                $include= new Includes();
                $include->create_include($_POST['id_r'],$serv[0][0]);




            }


        } catch (Exception $e) {
        }
    }
    header('Location: ../Request.php');
}
catch (Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    header('Location: ../Add_request.php'); // Редирект на авторазацию
    die();
}