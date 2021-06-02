<?php

session_start();

$link = $_GET['link'] ?? "";

if($link === 'logout') {
    unset($_SESSION['user']);
    session_destroy();
    header("index.php");
}

include './Head.php';

if(empty($_SESSION['user'])) {
    if($link === 'reg') {
        include './Reg.php';
    } else {
        include './Auth.php';
    }
} else {
    include './Messanger.php';
}

include './Footer.php';