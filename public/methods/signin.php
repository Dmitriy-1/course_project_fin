<?php
require_once('connect.php');
require('../../libs/account.php');
session_start();

try {
    $user = new Account();
    $user->login = trim($_POST['login']);
    $user->password= trim($_POST['password']);
    $tempUser = $user->checkedLogin();
    if (!$tempUser) {
        throw new Exception('Неверно введен логин и (или) пароль.');
    }

    $_SESSION['user'] = $tempUser;

    if($tempUser->director==1){
        unset($_SESSION['login']);
        header('Location: ../Director.php'); // Редирект на главную
        die();
    }
    else{
        unset($_SESSION['login']);
        header('Location: ../index.php'); // Редирект на главную
        die();
    }
} catch (Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['login'] = $user->login_user;
    header('Location: ../autorization.php'); // Редирект на авторазацию
    die();
}

