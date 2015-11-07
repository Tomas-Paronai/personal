<?php
	
$sql = mysqli_connect('localhost','root') or die("No connection");

$database = mysqli_select_db($sql,'akademiasovy') or die("No database");

//$query = "INSERT INTO users (E-mail,Name,Surname,Password,Address,City,Postcode) VALUES ('zeman@csr.cz','Milos','Zeman','power','Hradna 1','Praha','25000')";
$query = "INSERT INTO users (Name,Surname) VALUES ('Milos','Zeman')";
mysqli_query($sql, $query) or die("Nothing");

?>