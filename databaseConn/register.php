<html>
<body>
	
	<?php
		$nameErr = $emailErr = $addressErr = $cityErr = $pcodeErr = $passErr = "";
		$name = $surname = $email = $address = $city = $pcode = $pass1 = $pass2 = "";
		
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$pcode = $_POST['pcode'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			
			if(allGood()){
				$message = "Match not found!";
				
				$sql = mysqli_connect('localhost','root') or die("No connection");
				
				$database = mysqli_select_db($sql,'akademiasovy') or die("No database");
				
				$query = "SELECT * FROM users";
				
				$fetch = mysqli_query($sql, $query) or die("No query");
				
				if(checkData($fetch)){
					$where = "INSERT INTO users (E-mail,Name,Surname,Password,Address,City,Postcode) ";
					$what = "VALUES (".$email.",".$name.",".$surname.",".$pass1.",".$address.",".$city.",".$pcode.")";
					$query = $where . $what;
					mysqli_query($sql, $query);
				}
				
			}
		}
		function checkData($fetch){
			while($row = mysqli_fetch_assoc($fetch)){
				if($row['E-mail'] == $GLOBALS['email']){
					$GLOBALS['emailErr'] = "There is already an user register by this email.";
					return false;
				}
			}
			return true;
		}
		
		
		function allGood(){
			$n = 0;
			if($GLOBALS['name']==null){
				$GLOBALS['nameErr'] = "Enter name and surname.";
				$n++;
			}
			if($GLOBALS['surname']==null){
				$GLOBALS['nameErr'] = "Enter name and surname.";
				$n++;
			}
			if($GLOBALS['email']==null){
				$GLOBALS['emailErr'] = "Enter email.";
				$n++;
			}
			if($GLOBALS['address']==null){
				$GLOBALS['addressErr'] = "Enter adress.";
				$n++;
			}
			if($GLOBALS['city']==null){
				$GLOBALS['cityErr'] = "Enter city.";
				$n++;
			}
			if($GLOBALS['pcode']==null){
				$GLOBALS['pcodeErr'] = "Enter post code.";
				$n++;
			}
			if($GLOBALS['pass1']==null || $GLOBALS['pass2']==null){
				$GLOBALS['passErr'] = "Enter password.";
				$n++;
			}
			if($n!=0){
				return false;
			}
			return true;
		}

	?>
	
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<ul>
			<li>Name: <input type="text" name="name" maxlength="20"><span> <?php echo $nameErr;?></span></li>
			<li>Surname: <input type="text" name="surname" maxlength="20"></li>
			<li>Email: <input type="email" name="email" maxlength="40"><span> <?php echo $emailErr;?></span></li>
			<li>Address: <input type="text" name="address" maxlength="30"><span> <?php echo $addressErr;?></span></li>
			<li>City: <input type="text" name="city" maxlength="20"><span> <?php echo $cityErr;?></span></li>
			<li>Post code: <input type="number" name="pcode" maxlength="5"><span> <?php echo $pcodeErr;?></span></li>
			<li><br/></li>
			<li>Password: <input type="password" name="pass1" maxlength="30"><span> <?php echo $passErr;?></span></li>
			<li>Retype: <input type="password" name="pass2" maxlength="30"></li>
			<li><br/></li>
			<li><input type="submit" name="submit" value="Submit"></li>
		</ul>
	</form>
	
</body>
</html>
