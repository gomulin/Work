<?php

$connection = new PDO('mysql:dbname=messanger;host=db', 'root', 'root');

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$userName = htmlspecialchars(trim($data['user_name']));
$message = htmlspecialchars(trim($data['message']));

if(!empty($message)){
    $connection->exec("INSERT INTO message (user_name, message) VALUES ('$userName', '$message') ");
}