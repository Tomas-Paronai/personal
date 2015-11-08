<?php
	
class Security{
			
	public function __construct(){

	}
	
	public function checkUser($usermail, $password){
		return true;
	}
	
	public function inputCheck($input){
	if($input != null){
		return true;
	}
		
	return false;
	}
	
}
	

?>