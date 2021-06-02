<?php

$connection = new PDO('mysql:dbname=messanger;host=db', 'root', 'root');

$result = $connection->query("SELECT user_name, message FROM message")->fetchAll();

echo json_encode($result);