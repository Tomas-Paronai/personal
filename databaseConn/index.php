<html>
<body>

<?php
	
$message = "Match not found!";

$sql = mysqli_connect('localhost','root') or die("No connection");

$database = mysqli_select_db($sql,'akademiasovy') or die("No database");

$query = "SELECT * FROM users";

$fetch = mysqli_query($sql, $query) or die("No query");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$usermail = $_POST['usermail'];
	$passwod = $_POST['password'];
	if($usermail!=null && $passwod!=null){
		$message=checkLogin($usermail,$passwod,$fetch);
	}
}

function checkLogin($mail,$pass,$fetch){
	while($row = mysqli_fetch_assoc($fetch)){
		if($row['Password'] == $pass && $row['E-mail'] == $mail){
			return "Match found!";
		}
	}
	return "Match not found!";
}

?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		Email:<input type="text" name="usermail"><br/>
		Password:<input type="password" name="password"><br/>
		<input type="submit" name="submit" value="Login">
	</form>
	<?php echo $message . "<br/>"?>
	<a href="register.php">Register</a><br/>
</body>
</html>


