<?php
require_once('connect.php');
require('../../libs/administrator.php');
session_start();
$admin= new Administrator();
$admin->admin_cont();
$admin->create_admin();



header('Location: ../Administrator.php');




