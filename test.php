<?php 

	function noError(){
		if(isset($_POST['name'],$_POST['email'],$_POST['city'])){
			return false;
		} 
		return true;
	}
	
	function checkEmail($input){
		return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $input) ? TRUE : FALSE;
	}
	
?>
