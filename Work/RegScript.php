<?php

$connection = new PDO('mysql:dbname=messanger;host=db', 'root', 'root');

$login = htmlspecialchars(trim($_POST['login']));
$password = md5(htmlspecialchars(trim($_POST['password'])));
$result = $connection->query("SELECT * FROM users WHERE login = '$login' AND password = '$password' ")->fetchAll();

if(count($result) == 1) {
    header("location: index.php?link=auth");
}

if(!empty($login) and !empty($password)){
    $connection->exec("INSERT INTO users (login, password) VALUES ('$login', '$password') ");
    header("location: index.php");
}