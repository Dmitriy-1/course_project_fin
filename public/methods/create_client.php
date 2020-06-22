<?php
require_once('connect.php');
require('../../libs/inquiries_client.php');
session_start();

$client = new Inquiries();
$client->client_cont();
$client->create_client();
header('Location: ../Client.php');




