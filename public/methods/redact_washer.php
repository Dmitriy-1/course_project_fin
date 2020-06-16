<?php
require_once('connect.php');
require('../../libs/washer.php');
session_start();

$washer = new Washer();
try {
    $washer->check_param();

    $washer->update_washer();
    header('Location: ../Washer.php');
} catch (Exception $e) {
}

