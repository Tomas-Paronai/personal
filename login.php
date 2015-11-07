<html>
<body>
	<?php
		
		include 'valid.php';
		
		if($_SERVER['REQUEST_METHOD']=='post')
			login();
		
	?>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		Username: <input type="text" name="username"> <br/>
		Password: <input type="password" name="password"> <br/>
		<input type="submit" value="Login">
	</form>

</body>
</html>