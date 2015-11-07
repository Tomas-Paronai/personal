<!DOCTYPE html>
<html>
	<head>
		<style>
		span{
			color:red;
		}
		div{
			text-align:center;
		}
		</style>
	</head>
	<body>
	<?php
	
	include 'test.php';
	
	$name = $email = $city = "";
	$nameErr = $emailErr = $cityErr = "";
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if($_POST['name'] == null && strlen($_POST['name'])){
			$nameErr = "Name required!";
		}
		else{
			$name = validate($_POST['name']);
		}
		
		if($_POST['email'] == null && strlen($_POST['email'])){
			$emailErr = "Email required!";
		}
		else{
			if(checkEmail($_POST['email']))
				$email = validate($_POST['email']);
			else{
				$emailErr = "Invalid email!";
			}
		}
		
		if($_POST['city'] == null && strlen($_POST['city'])){
			$cityErr = "city required!";
		}
		else{
			$city = validate($_POST['city']);
		}
		/*setCookie("name",$name,time() - 3600, "/"); //for cookie deletion set time for one hour ago
		setCookie("email",$email,time() - 3600, "/");
		setCookie("city",$city,time() - 3600, "/");*/
		
		if(noError()){
			setCookie("name",$name,time() + (86400 * 30), "/"); //set cookie for 30 days | 86400sec = 1 day 
			setCookie("email",$email,time() + (86400 * 30), "/");
			setCookie("city",$city,time() + (86400 * 30), "/");			
		}
	}
	
		
	function validate($input){
		$input = trim($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}
	

	
	
?>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
			<table width="500" border="1">
				<tr><td><div>Name:</div></td><td><input type="textbox" size="15" name="name" maxlength="40"
				value="<?php if(isset($_COOKIE["name"])){
					echo $_COOKIE["name"];
					}
					else{
						echo $name;
					}
				?>">
				<span>*<?php echo $nameErr;?></span></td></tr>
				<tr><td><div>Email:</div></td><td><input type="text" size="15" name="email" maxlength="100"
				value="<?php if(isset($_COOKIE["email"])){
					echo $_COOKIE["email"];
					}
					else{
						echo $email;
					}
				?>">
				<span>*<?php echo $emailErr;?></span></td></tr>
				<tr><td><div>City:</div></td><td><input type="textbox" size="15" name="city" maxlength="25"
				value="<?php if(isset($_COOKIE["city"])){
					echo $_COOKIE["city"];
					}
					else{
						echo $city;
					}
				?>"><span>*<?php echo $cityErr;?></span></td></tr>
				<tr><td colspan="2"><input type="submit" value="Submit" name="submit"></td></tr>
			</table>
		</form>
		
		<?php
			if($name!=null && $email!=null && $city!=null){
				echo $name . "<br>";
				echo $email . "<br>";
				echo $city . "<br>";
				echo $_SERVER['SERVER_NAME'];
			}			
		?>
	</body>
</html>