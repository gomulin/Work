<?php

session_start();

$connection = new PDO('mysql:dbname=messanger;host=db', 'root', 'root');

$login = htmlspecialchars(trim($_POST['login']));
$password = md5(htmlspecialchars(trim($_POST['password'])));
$result = $connection->query("SELECT * FROM users WHERE login = '$login' AND password = '$password' ")->fetchAll();

if(count($result) == 1) {
    $_SESSION['user'] = array($result[0]['login'], $result[0]['password']);
}

header("location: index.php");