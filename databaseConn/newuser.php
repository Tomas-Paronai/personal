<?php

include 'Database.php';

class user{
	
	private $name;
	private $id;
	private $surname;
	private $email;
	private $pasword;
	private $address;
	private $city;
	private $postcode;
	
	private $handlerDB;
	
	function __construct($name, $surname, $email, $password){
		if($name!=null && strlen($name) <= 20){
			$this->saveData("name", $name);
			//todo with id
		}
		$this->name=$name;
		$this->surname=$surname;
		$this->email=$email;
		$this->pasword=$password;
		
		$this->handlerDB = new DBHandler();
	}
	
	function insertAddress($address, $city, $postcode){
		if($address!=null){
			$this->address=$address;
		}
		if($city!=null){
			$this->city=$city;
		}
		if($postcode!=null){
			$this->postcode=$postcode;
		}	
	}
	
	private function saveData($parameter, $value, $id){
		if($parameter!=null && $value!=null){
			$this->handlerDB->query('INSERT INTO users '%$parameter%' VALUES :'%$value%' WHERE userid=:'%$id%'');
			$this->handlerDB->bind(':'%$value%'',''%$value%''); //todo
			$this->handlerDB->bind(':'%$id%'',''%$id%'');
			$this->handlerDB->execute();
		}
	}
	private function saveData($parameter, $value){
		if($parameter!=null && $value!=null){
			$this->handlerDB->query('INSERT INTO users '%$parameter%' VALUES :'%$value%'');
			$this->handlerDB->bind(':'%$value%'',''%$value%'');
			$this->handlerDB->execute();
		}
	}
}


?>