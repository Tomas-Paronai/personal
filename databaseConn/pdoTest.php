<?php

include 'Database.php';
$title = 'users';
$name = 'Tomas';


$handlerDB = new DBHandler();	

$handlerDB->query('UPDATE users SET name=:name WHERE userid=:userid');
$handlerDB->bind(":name","Tomas");
$handlerDB->bind(":userid","1");
$handlerDB->execute();

$handlerDB->query('INSERT INTO users (name,password) VALUES (:name,:password) ');
$handlerDB->bind(":name","Tomas");
$handlerDB->bind(":password","blanka");
$handlerDB->execute();

$handlerDB->query('SELECT*FROM users');

$users = array();
$users = $handlerDB->resultSet();
$count = count($users);

for($i=0;$i<$count;$i++){
	echo $users[$i]['name'],"<br/>";
}


?>