<?php

session_start();

require_once 'lib/class.user.php';

$user = new USER();

if(!$user->isloggedin()) {
    $user->redirect('index.php');
}

if($user->isloggedin()!="") {
    $user->logout();
    $user->redirect('index.php');
}
?>